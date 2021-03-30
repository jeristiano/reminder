<?php

namespace App\Http\Livewire;

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
    public $subscription;

    public function mount ($sub): void
    {
        $this->subscription = \App\Models\Subscription::find($sub);
        $this->hours = $this->subscription->hours;
        $this->minutes = $this->subscription->minutes;
        $this->tags = Tag::where('user_id', request()->user()->id)
            ->pluck('name', 'id');

    }

    public function render ()
    {
        return view('livewire.subscription-edit');
    }
}
