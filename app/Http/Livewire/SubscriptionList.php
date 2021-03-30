<?php

namespace App\Http\Livewire;

use Livewire\Component;

/**
 * Class SubscriptionList
 * @package App\Http\Livewire
 */
class SubscriptionList extends Component
{

    protected $tags;
    protected $subscriptions;

    public function mount ($subscriptions,$tags)
    {
        $this->subscriptions = $subscriptions;
        $this->tags = $tags;
    }

    public function render ()
    {

        return view('livewire.subscription-list', ['subscriptions' => $this->subscriptions,
            'tags'=>$this->tags]);
    }


}
