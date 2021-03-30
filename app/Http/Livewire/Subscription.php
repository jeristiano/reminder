<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;

/**
 * Class Subscription
 * @package App\Http\Livewire
 */
class Subscription extends Component
{


    public function render()
    {
        $tags = Tag::where('user_id', request()->user()->id)
            ->pluck('name', 'id');
        $subscriptions = \App\Models\Subscription::where('user_id', request()->user()->id)
            ->paginate(5);
        return view('livewire.subscription',compact('subscriptions','tags'));
    }
}
