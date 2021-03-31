<?php

namespace App\Http\Livewire;

use App\Models\Subscription;
use App\Models\Tag;
use Livewire\Component;

/**
 * Class SubscriptionCreate
 * @package App\Http\Livewire
 */
class SubscriptionCreate extends Component
{
    /**
     * 初始化.
     */
    public $minutes = 59;
    public $hours = 23;
    public $tag_id;
    public $tags;
    public $subscription;

    protected $rules = [
        'hours' => 'required|numeric|between:1,23',
        'minutes' => 'required|numeric|between:0,59',
    ];

    protected $messages = [
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
    public function updated ($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function mount (): void
    {
        $this->tags = Tag::where('user_id', request()->user()->id)
            ->pluck('name', 'id');

    }

    public function render ()
    {
        return view('livewire.subscription-create');
    }

    public function submit ()
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

        if ($sub) {
            session()->flash('Error', '重复订阅,同一时间段只能订阅一个!!');
            return view('livewire.subscription-create');
        }

        Subscription::create(
            [
                'tag_ids' => implode(',', $validatedData['tag_id']),
                'hours' => $validatedData['hours'],
                'user_id' => request()->user()->id,
                'minutes' =>$validatedData['minutes'],
            ]
        );
        session()->flash('Success', '创建');
        return redirect()->route('subscriptions');
    }

}
