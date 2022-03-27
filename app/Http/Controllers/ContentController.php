<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentUpdateRequest;
use App\Models\Note;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
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
        $total = Note::with('tag')
            ->where('user_id', request()->user()->id)
            ->when(request()->tag, function ($query, $tag_id) {
                return $query->where('tag_id', $tag_id);
            })->count();

        $tagModel = Tag::where('user_id', request()->user()->id)
            ->when(request()->tag??-1, function ($query, $tag_id) {
                return $query->where('id', $tag_id);
            })->first();
        $tag = request()->tag ?? null;
        $page = request()->page ?? 1;
        return view('content.index', compact('total', 'tag', 'tagModel', 'page'));
    }

    /**
     */
    public function edit ()
    {
        $content = Note::find(request()->id);
        if (!$content) {
            return redirect()->route('content')->with('Error', '不存在的条目');
        }

        if ($content->user_id != Auth::user()->id) {
            abort(403);
        }
        $tags = Tag::where('user_id', request()->user()->id)->pluck('name', 'id');
        $page = request()->page ?? null;
        return view('content.edit', compact('content', 'tags', 'page'));
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
            return redirect()->route('content.edit')->with('Error', '不存在的条目');
        }

        if ($content->user_id != $request->user()->id) {
            abort(403);
        }

        $content->user_id = request()->user()->id;
        $content->tag_id =$request->tag_id;
        $content->title = $request->title;
        $content->text = $request->text;
        $content->save();
        return redirect()->route('content', ['page' => request()->page])->with('Success', '修改成功');
    }


    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete ()
    {
        $content = Note::find(request()->id);
        if (!$content) {
            return redirect()->route('content')->with('Error', '不存在的条目');
        }

        if ($content->user_id != request()->user()->id) {
            abort(403);
        }
        $content->delete();
        return redirect()->route('content',['page' => request()->page])->with('Success', '删除成功');

    }

}
