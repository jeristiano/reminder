<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Tag;
use Illuminate\Support\Facades\Validator;

/**
 * Class SubscriptionController
 * @package App\Http\Controllers
 */
class SubscriptionController extends Controller
{
    //

    public function __construct ()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
        $subscriptions = Subscription::where('user_id', request()->user()->id)
            ->get();

        $tags = Tag::where('user_id', request()->user()->id)
            ->pluck('name', 'id');

        return view('subscriptions.index', compact('subscriptions', 'tags'));
    }


    /**
     */
    public function create ()
    {
        if (request()->method() === 'POST') {
            $validator = Validator::make(request()->all(), [
                'tag_id' => ['required', 'array'],
                'hours' => ['required', 'between:0,24'],
                'minutes' => ['required', 'between:0,59'],
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $sub = Subscription::where('user_id', request()->user()->id)
                ->where('hours', request()->hours)
                ->where('minutes', request()->minutes)
                ->first();

            if ($sub) {
                return redirect()->back()->withInput()->with('danger', '重复订阅,同一时间段只能订阅一个!!');
            }

            Subscription::create(
                [
                    'tag_ids' => implode(',', request()->tag_id),
                    'hours' => request()->hours,
                    'user_id' => request()->user()->id,
                    'minutes' => request()->minutes,
                ]
            );

            return redirect()->route('subscriptions')->with('success', '订阅成功');
        }

        $tags = Tag::getTotalTags(request()->user()->id);
        return view('subscriptions.create', compact('tags'));
    }
}
