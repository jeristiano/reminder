<?php

namespace App\Http\Livewire;

use App\Models\Note;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

/**
 * Class Publish
 * @package App\Http\Livewire
 */
class Publish extends Component
{

    public $count;
    public $tags;
    public $title;
    public $text;

    protected $rules = [
        'title' => 'required|max:255',
        'text' => 'required|min:3',
    ];


    protected $messages = [
        'title.required' => '标题不能为空',
        'text.required' => 'text不能为空',
        'title.max' => '标题超过最大限制',
        'text.min' => 'text长度',
    ];

    protected $validationAttributes = [
        'title' => '主题',
        'text' => 'text',
    ];


    /**
     * @param $propertyName
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated ($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount ()
    {
        $this->count = Note::where('user_id', Auth::user()->id)->count();
        $this->tags = $this->tagMapping();
    }


    public function render ()
    {
        return view('livewire.publish');
    }

    /**
     * @return mixed
     */
    public function tagMapping ()
    {
        return Tag::where('user_id', request()->user()->id)->pluck('name', 'id');

    }

    public function submit(){
        $validatedData = $this->validate([
            'title' => 'required|max:255',
            'text' => 'required|min:3',
        ]);


    }

}
