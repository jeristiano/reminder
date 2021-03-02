<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNoteRequest;
use App\Mail\MailDeliver;
use App\Models\Note;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

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

        $textArray = explode('||', $request->text);
        foreach ($textArray as $value) {
//            $value = trim($value);
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
    public function mail ()
    {
        $mail = Note::with(['tag'])
            ->orderByDesc('id')
            ->limit(1)
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
}
