<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Footer extends Component
{

    public $app;

    /**
     * 初始化.
     */
    public function mount(): void
    {
        $this->app = config('app');
    }

    public function render()
    {
        return view('livewire.footer');
    }


}
