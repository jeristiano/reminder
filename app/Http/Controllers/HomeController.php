<?php

namespace App\Http\Controllers;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    public function index ()
    {
        $info = [
            'total_items' => 1984
        ];

        return view('publish/show', compact('info'));
    }
    //
}
