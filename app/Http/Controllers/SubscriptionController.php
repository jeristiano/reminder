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


}
