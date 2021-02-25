<?php

namespace App\Http\Controllers;

use App\Mail\MailDeliver;
use Carbon\Carbon;

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

    /**
     * @return string
     * @throws \ReflectionException
     */
    public function mail ()
    {
        return (new MailDeliver([
            [
                'contents' => '当我买第一台电视机的时候，我就不再那么在意跟其他人享有亲密关系了。我一直没有结婚，直到1964年我拿到第一台录音机。我的妻子。我跟我的录音机结婚已经十年了',
                'author' => '安迪沃霍尔',
                'tag' => '语录',
            ],[
                'contents' => '在未来时代,有一种人可能经常换行业,换工作,但从不会失业,他就是个超级个体。',
                'author' => '古典',
                'tag' => '逻辑思维',
            ]
        ]))->render();
//      return  Mail::to('jeremykuang@foxmail.com')->send(new MailDeliver([
//          'contents'=>'当我买第一台电视机的时候，我就不再那么在意跟其他人享有亲密关系了。我一直没有结婚，直到1964年我拿到第一台录音机。我的妻子。我跟我的录音机结婚已经十年了',
//          'author'=>'安迪沃霍尔',
//      ]));
    }
}
