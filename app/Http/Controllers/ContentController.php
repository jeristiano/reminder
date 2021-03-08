<?php

namespace App\Http\Controllers;

use App\Models\Note;

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
           ->paginate(10);

        return view('content.index', compact('contents'));
    }

}
