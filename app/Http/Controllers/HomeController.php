<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNoteRequest;
use App\Mail\MailDeliver;
use App\Models\Note;
use App\Models\Subscription;
use App\Models\Tag;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

//todo 1. 用户提交笔记的预览功能
//todo 2. 用户维护自己的标签已经订阅取消功能

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct ()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index ()
    {
        $user_id = Auth::user()->id;
        $count = Note::where('user_id', $user_id)->count();
        $tags = $this->tagMapping();
        return view('publish.show', compact('count', 'user_id', 'tags'));
    }


    /**
     * @param \App\Http\Requests\CreateNoteRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create (CreateNoteRequest $request)
    {

        $textArray = explode("<hr>", $request->text);
        foreach ($textArray as $value) {
            if (!$value) continue;
            if ($value) {
                $note = new Note();
                $note->user_id = $request->user_id;
                $note->tag_id = $request->tag_id;
                $note->title = $request->title;
                $note->text = $value;
                $note->save();
            }
        }
        session()->flash('success', '发布成功~');
        return redirect()->back();
    }

    /**
     * @return string
     * @throws \ReflectionException
     */
    public function mail ($mail)
    {
        $mail = Note::with(['tag'])
            ->where('id',$mail)
            ->get();
        return (new MailDeliver($mail))->render();
    }


    /**
     * @return mixed
     */
    public function tagMapping ()
    {
        return Tag::pluck('name', 'id');

    }

    /**
     * @return mixed
     */
    public function subscribe ()
    {
        $subscribes = Subscription::where('pushed_time', '=', 1614787200)
            ->where('hours', 8)
            ->limit(200)
            ->get();
        if (!$subscribes) return [];

        foreach ($subscribes as $subscribe) {
            $notes = $this->getUserPushingContents(explode(',', $subscribe->tag_ids));
            //  $this->pushingNoteToQueue($notes);
            $subscribe->pushed_time = Carbon::today()->addDays(1)->timestamp;
            $subscribe->save();
        }

    }

    /**
     * @param       $user_id
     * @param array $tags
     * @return array
     */
    public function getUserPushingContents (array $tags)
    {
        foreach ($tags as $tag_id) {
            $notes = Note::with(['author'])
                ->orderByRaw("RAND()")
                ->where('tag_id', $tag_id)
                ->limit(1)
                ->get();
            if ($notes->isNotEmpty()) {
                $response[] = $notes->pop();
            }

        }

        return $response ?? [];


    }

    /**
     * @return string
     * @throws \ReflectionException
     */
    public function preview ()
    {
//        $mail = Note::with(['tag'])
//            ->orderByDesc('id')
//            ->limit(1)
//            ->get();
//
//        $notes = Note::with(['author'])
//            ->orderByRaw("RAND()")
//            ->where('tag_id', 1)
//            ->limit(1)
//            ->get();
//        dd($notes->pop());
        return (new MailDeliver($mail))->render();
    }


}
