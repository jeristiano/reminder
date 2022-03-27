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
    public $tag_id;
    public $title;
    public $text;
    public $elementId;
    protected $rules = [
        'title' => 'required|max:255',
        'text' => 'required|min:3',
        'tag_id' => 'required|numeric',
    ];


    protected $messages = [
        'title.required' => '标题不能为空',
        'text.required' => 'text不能为空',
        'tag_id.required' => '请选择主题',
        'title.max' => '标题超过最大限制',
        'text.min' => 'text长度',
    ];

    protected $validationAttributes = [
        'title' => '主题',
        'text' => 'text',
        'tag_id' => '标签',
    ];


    /**
     * @param $propertyName
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated ($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /**
     * @param       $elementId
     * @param false $renderedLater
     */
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

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit ()
    {
        $validatedData = $this->validate([
            'title' => 'required|max:255',
            'tag_id' => 'required|numeric',
            'text' => 'required|min:3',
        ]);
        $textArray = explode("<hr>", $validatedData['text']);

        foreach ($textArray as $value) {
            if (!$value) continue;
            if ($value) {
                $note = new Note();
                $note->user_id = request()->user()->id;
                $note->tag_id = $validatedData['tag_id'];
                $note->title = $validatedData['title'];
                $note->text = $value;
                $note->save();
            }
        }
        session()->flash('Success', '发布成功');
        return redirect()->route('publish');

    }

}
