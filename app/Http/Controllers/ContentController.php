<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentUpdateRequest;
use App\Models\Note;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

/**
 * Class ContentController
 * @package App\Http\Controllers
 */
class ContentController extends Controller
{
    //
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct ()
    {
        $this->middleware('auth');
    }

    /**
     */
    public function index ()
    {

        $contents = Note::with('tag')
            ->orderByDesc('created_at')
            ->where('user_id', request()->user()->id)
            ->when(request()->tag, function ($query, $tag_id) {
                return $query->where('tag_id', $tag_id);
            })
            ->paginate(10);

        return view('content.index', compact('contents'));
    }

    /**
     */
    public function edit ()
    {
        $content = Note::find(request()->id);
        if (!$content) {
            return redirect()->route('content')->with('danger', '不存在的条目');
        }

        if ($content->user_id != Auth::user()->id) {
            abort(403);
        }
        $tags = Tag::where('user_id', request()->user()->id)->pluck('name', 'id');

        return view('content.edit', compact('content', 'tags'));
    }


    /**
     * 更新
     * @param \App\Http\Requests\ContentUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update (ContentUpdateRequest $request)
    {
        $content = Note::find($request->id);
        if (!$content) {
            return redirect()->route('content.edit')->with('danger', '不存在的条目');
        }

        if ($content->user_id != $request->user()->id) {
            abort(403);
        }
        $content->title = $request->title;
        $content->text = $request->text;
        $content->tag_id = $request->tag_id;
        $content->save();
        return redirect()->route('content')->with('success', '修改成功');
    }


    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete ()
    {
        $content = Note::find(request()->id);
        if (!$content) {
            return redirect()->route('content')->with('danger', '不存在的条目');
        }

        if ($content->user_id != request()->user()->id) {
            abort(403);
        }
        $content->delete();
        return redirect()->route('content')->with('success', '删除成功');

    }

}
