<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SayHi extends Component
{

    public $contact;

    public $listeners = [
        'refreshChildren' => '$refresh',
        'foo'=>'$refresh'
    ];



    public function render ()
    {
        return view('livewire.say-hi');
    }


    public function refreshFoo ()
    {
        $this->emitUp('foo');
    }

    /**
     * @param \App\Models\User $user
     */
    public function mount (User $user)
    {
        $this->contact = $user;
    }


}
