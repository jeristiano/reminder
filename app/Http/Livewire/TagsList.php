<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;

/**
 * Class TagsList
 * @package App\Http\Livewire
 */
class TagsList extends Component
{


    protected $tags;
    protected $listeners = ['deleteTag', 'editTag'];

    public function mount ($tags)
    {
        $this->tags = $tags;
    }

    /**
     *
     */
    public function render ()
    {
        return view('livewire.tags-list', ['tags' => $this->tags]);
    }


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function deleteTag ($id)
    {
        $tagModel = Tag::with(['note'])
            ->where('id', $id)
            ->first();

        if (!$tagModel) {
            session()->flash('Error', '不存在的条目');
            return redirect()->route('tags');
        }


        if ($tagModel->user_id != request()->user()->id) {
            session()->flash('Error', '403 Forbidden Operation');
            return redirect()->route('tags');
        }

        if ($tagModel->note->count() > 0) {
            session()->flash('Error', "标签:【{$tagModel->name}】已经有内容不能删除");
            return redirect()->route('tags');
        }
        $tagModel->delete();
        session()->flash('Success', '删除成功');
        return redirect()->route('tags');
    }



}
