<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Support\Facades\Validator;

/**
 * Class TagController
 * @package App\Http\Controllers
 */
class TagController extends Controller
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
        $tags = Tag::with(['note'])
            ->where('user_id', request()->user()->id)
            ->paginate(10);

        return view('tags.show',compact('tags'));
    }

    /**
     */
    public function create ()
    {

        if (request()->method() == 'POST') {

            $validator = Validator::make(request()->all(), [
                'name' => ['required', 'unique:tags', 'max:100'],
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $tagModel = new Tag();
            $tagModel->name = request()->name;
            $tagModel->user_id = request()->user()->id;
            $tagModel->save();

            return redirect()->back()->with('success', '提交成功');
        }
        $tags = Tag::where('user_id', request()
            ->user()->id)
            ->limit(50)
            ->pluck('name');
        return view('tags.create', compact('tags'));
    }

    /**
     * @param $tag
     */
    public function delete ()
    {
        $tagModel = Tag::with(['note'])
            ->where('id', request()->tag)
            ->first();
        if (!$tagModel) {
            return redirect()->route('tags')->with('danger', '不存在的条目');
        }

        if ($tagModel->user_id != request()->user()->id) {
            abort(403, 'forbidden operation');
        }

        if($tagModel->note->count()>0){
            return redirect()->route('tags')->with('danger', "标签:【{$tagModel->name}】已经有内容不能删除");
        }


    }
}
