<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;

/**
 * Class TagsEdit
 * @package App\Http\Livewire
 */
class TagsEdit extends Component
{

    /**
     */
    public $tags;
    public $name;
    public $tagModel;
    protected $rules = [
        'name' => 'required|max:255',
    ];


    protected $messages = [
        'name.required' => '标签不能为空',
        'name.max' => '标签超过最大限制',
    ];

    protected $validationAttributes = [
        'name' => '标签',
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
     * 初始化.
     */
    public function mount ($tag): void
    {
        $this->tags = $this->getTotalTags();
        $this->tagModel = Tag::find($tag);
        $this->name = $this->tagModel->name;
    }

    /**
     * @return mixed
     */
    public function getTotalTags ()
    {
        return Tag::where('user_id', request()
            ->user()->id)
            ->limit(50)
            ->pluck('name');
    }


    public function submit ()
    {
        $validatedData = $this->validate([
            'name' => ['required', 'max:100'],
        ]);

        $tagModel = Tag::find($this->tagModel->id);

        if (!$tagModel) {
            session()->flash('Danger', '不存在的条目');
            return redirect()->route('tags');
        }

        if ($tagModel->name == request()->name) {
            session()->flash('Success', '发布成功');
            return redirect()->route('tags');
        }

        $tagModel->name = $validatedData['name'];
        $tagModel->save();
        session()->flash('Success', '修改');
        return redirect()->route('tags');
    }

    public function render ()
    {

        return view('livewire.tags-edit');
    }


}
