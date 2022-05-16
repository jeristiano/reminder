<?php

namespace App\Http\Livewire;

use App\Models\Subscription;
use App\Models\Tag;
use Livewire\Component;

/**
 * Class SubscriptionEdit
 * @package App\Http\Livewire
 */
class SubscriptionEdit extends Component
{
    /**
     * 初始化.
     */
    public $minutes;
    public $hours;
    public $tags;
    public $tag_id;
    public $subscription;
    protected $rules = [
        'hours' => 'required|numeric|between:1,23',
        'minutes' => 'required|numeric|between:0,59',
    ];

    protected $messages = [
        'tag_id.required' => '标签不能为空',
        'hours.required' => '时间不能为空',
        'minutes.required' => '分钟不能为空',
        'hours.between' => '小时区间为0-23',
        'minutes.between' => '分钟区间为0-59',
    ];

    protected $validationAttributes = [
        'hours' => '时间',
        'minutes' => '分钟',
    ];


    /**
     * @param $propertyName
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($sub): void
    {
        $this->subscription = Subscription::find($sub);
        $this->hours = $this->subscription->hours;
        $this->minutes = $this->subscription->minutes;
        $this->tag_id = $this->subscription->tag_ids;
        $this->tags = Tag::where('user_id', request()->user()->id)
            ->pluck('name', 'id');

    }

    public function render()
    {
        return view('livewire.subscription-edit');
    }


    /**
     */
    public function submit()
    {
        $validatedData = $this->validate([
            'hours' => 'required|numeric|between:1,23',
            'minutes' => 'required|numeric|between:0,59',
            'tag_id' => 'required|array',
        ]);
        $sub = Subscription::where('user_id', request()->user()->id)
            ->where('hours', $validatedData['hours'])
            ->where('minutes', $validatedData['minutes'])
            ->first();

        if (!$sub) {
            Subscription::create(
                [
                    'tag_ids' => implode(',', $validatedData['tag_id']),
                    'hours' => $validatedData['hours'],
                    'user_id' => request()->user()->id,
                    'minutes' => $validatedData['minutes'],
                ]
            );
        } else {
            $update = [
                'tag_ids' => implode(',', $validatedData['tag_id']),
                'hours' => $validatedData['hours'],
                'user_id' => request()->user()->id,
                'minutes' => $validatedData['minutes'],
            ];
            $sub->fill($update)->save();
        }


        session()->flash('Success', '修改成功');
        return redirect()->route('subscriptions');
    }

}
