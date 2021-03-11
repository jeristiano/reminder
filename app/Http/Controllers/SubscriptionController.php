<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Tag;
use Illuminate\Support\Carbon;
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
                'hours' => ['required', 'between:0,23'],
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

    public function edit ()
    {
        $subscription = Subscription::find(request()->sub);
        $tags = Tag::getTotalTags(request()->user()->id);
        return view('subscriptions.edit', compact('subscription', 'tags'));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update ()
    {
        $validator = Validator::make(request()->all(), [
            'tag_id' => ['required', 'array'],
            'hours' => ['required', 'between:0,23'],
            'minutes' => ['required', 'between:0,59'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $sub = Subscription::find(request()->sub);

        if ($sub->user_id != request()->user()->id) {
            abort(403);
        }

        $subCheck = Subscription::where('user_id', request()->user()->id)
            ->where('hours', request()->hours)
            ->where('minutes', request()->minutes)
            ->first();

        if ($subCheck && $subCheck->id != request()->sub) {
            return redirect()->back()->withInput()->with('danger', '重复订阅,同一时间段只能订阅一个!!');
        }

        $sub->hours = request()->hours;
        $sub->minutes = request()->minutes;
        $sub->tag_ids = implode(',', request()->tag_id);
        $sub->save();

        return redirect()->route('subscriptions')->with('success', '修改成功');

    }

    public function delete ()
    {
        $subModel = Subscription::where('id', request()->sub)->first();
        if (!$subModel) {
            return redirect()->route('subscriptions')->with('danger', '不存在的条目');
        }

        if ($subModel->user_id != request()->user()->id) {
            abort(403, 'forbidden operation');
        }

        $hours = Carbon::createFromTime($subModel->hours)->timestamp;
        $pushedTime = Carbon::parse($subModel->pushed_time)->timestamp;

        //如果任务已经执行到队列时,提示订阅会在队列执行完成后删除

        if ($hours - $pushedTime <= 1) {
            $subModel->delete();
            return redirect()->route('subscriptions')->with('success', '最后执行完成后,删除');
        }
        $subModel->delete();
        return redirect()->route('subscriptions')->with('success', '删除成功');
    }
}
