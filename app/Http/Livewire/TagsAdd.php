<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;

/**
 * Class TagsAdd
 * @package App\Http\Livewire
 */
class TagsAdd extends Component
{

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
     * @return mixed
     */
    public function getTotalTags ()
    {
        return Tag::where('user_id', request()
            ->user()->id)
            ->limit(50)
            ->pluck('name');
    }

    public function mount ()
    {
        $this->tags = $this->getTotalTags();

    }

    /**
     */
    public function render ()
    {
        return view('livewire.tags-add');
    }

    /**
     */
    public function submit ()
    {
        $validatedData = $this->validate([
            'name' => ['required', 'max:100'],
        ]);

        Tag::create(
            [
                'name' => $validatedData['name'],
                'user_id' => request()->user()->id,
            ]);
        session()->flash('Success', '创建');

        return redirect()->route('tags');
    }
}
