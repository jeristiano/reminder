<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

/**
 * Class HelloWorld
 * @package App\Http\Livewire
 */
class HelloWorld extends Component
{
//    public $name = '北方人';
//    public $loud = false;
//    public $greeting = 'Hello';
//    public $greetings = ['Hello'];

    public $contacts = ['Ann', 'Ben', 'Coz'];

    protected $listeners=[
        'foo'=>'$refresh'
    ];

    public function render ()
    {

        return view('livewire.hello-world');
    }

    public function mount ()
    {
        $this->contacts = User::all();
    }

    public function refreshChildren ()
    {
        $this->emit('refreshChildren');
    }


}
