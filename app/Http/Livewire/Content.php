<?php

namespace App\Http\Livewire;

use App\Models\Note;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

/**
 * Class Content
 * @package App\Http\Livewire
 */
class Content extends Component
{

    use WithPagination;

    /**
     * @var \App\Models\Note
     */
    public $tag=null;
    public $dismiss=0;


    /**
     */
    public function mount ($tag): void
    {
        $this->tag = $tag;
    }

    /**
     */
    public function render ()
    {

        $contents = Note::with('tag')
            ->orderByDesc('created_at')
            ->where('user_id', request()->user()->id)
            ->when($this->tag, function ($query, $tag_id) {
                return $query->where('tag_id', $tag_id);
            })
            ->paginate(5);
        return view('livewire.content', ['contents' => $contents,'page'=>request()->page??1]);
    }

}
