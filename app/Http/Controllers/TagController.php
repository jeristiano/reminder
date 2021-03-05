<?php

namespace App\Http\Controllers;

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
        return view('tags.show');
    }
}
