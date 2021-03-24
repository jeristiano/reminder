<?php

namespace App\Http\Livewire;

use App\Models\Note;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

/**
 * Class ContentEdit
 * @package App\Http\Livewire
 */
class ContentEdit extends Component
{

    public $tags;
    public $content;
    public $page;
    /**
     */
    public function mount ($content,$tags,$page): void
    {
        $this->tags = $tags;
        $this->content = $content;
        $this->page = $page;
    }

    /**
     */
    public function render ()
    {

        return view('livewire.content-edit');
    }


}
