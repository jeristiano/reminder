<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;

class Tags extends Component
{

    public $total;
    protected $tags;

    /**
     * @param \App\Models\Tag $tag
     */
    public function mount (Tag $tag)
    {
        $this->tagsModel = $tag;
        $this->total = $tag->where('user_id', request()->user()->id)->count();

    }

    /**
     * @return mixed
     */
    public function render ()
    {
        $tags = $this->tagsModel->with(['note'])
            ->where('user_id', request()->user()->id)
            ->paginate(5);
        return view('livewire.tags', compact('tags'))
            ->layout('layouts.app');
    }

}
