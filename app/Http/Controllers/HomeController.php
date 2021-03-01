<?php

namespace App\Http\Controllers;

use App\Mail\MailDeliver;
use App\Models\Note;
use Illuminate\Support\Facades\Mail;

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
        return view('home');
    }

    public function mail ()
    {
        $mail=Note::find([1,2]);
       return (new MailDeliver($mail))->render();
    }
}
