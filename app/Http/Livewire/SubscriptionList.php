<?php

namespace App\Http\Livewire;

use App\Models\Subscription;
use Illuminate\Support\Carbon;
use Livewire\Component;

/**
 * Class SubscriptionList
 * @package App\Http\Livewire
 */
class SubscriptionList extends Component
{

    public $listeners=['deleteSubs'];
    protected $tags;
    protected $subscriptions;

    public function mount ($subscriptions, $tags)
    {
        $this->subscriptions = $subscriptions;
        $this->tags = $tags;
    }

    public function render ()
    {

        return view('livewire.subscription-list', ['subscriptions' => $this->subscriptions,
            'tags' => $this->tags]);
    }


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function deleteSubs ($sub)
    {
        $subModel = Subscription::where('id', $sub)->first();
        if (!$subModel) {
            session()->flash('Error', '不存在的条目');
            return redirect()->route('tags');
        }

        if ($subModel->user_id != request()->user()->id) {
            session()->flash('Warning', '无权利操作');
            return redirect()->route('subscriptions');
        }

        $hours = Carbon::createFromTime($subModel->hours)->timestamp;
        $pushedTime = Carbon::parse($subModel->pushed_time)->timestamp;

        //如果任务已经执行到队列时,提示订阅会在队列执行完成后删除

        if ($hours - $pushedTime <= 1) {
            $subModel->delete();
            session()->flash('Success', '最后执行完成后,删除');
            return redirect()->route('subscriptions');
        }
        $subModel->delete();
        session()->flash('Success', '删除成功');
        return redirect()->route('subscriptions');
    }


}
