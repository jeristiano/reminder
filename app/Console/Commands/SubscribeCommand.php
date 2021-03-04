<?php

namespace App\Console\Commands;

use App\Jobs\PushingJob;
use App\Mail\MailDeliver;
use App\Models\Note;
use App\Models\Subscription;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

/**
 * Class SubscribeCommand
 * @package App\Console\Commands
 */
class SubscribeCommand extends Command
{
    /**
     * The name and signature of the console command.
     * @var string
     */
    protected $signature = 'subscribe:run';

    /**
     * The console command description.
     * @var string
     */
    protected $description = '发布用户的推送任务';

    /**
     * Create a new command instance.
     * @return void
     */
    public function __construct ()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     * @return int
     */
    public function handle ()
    {
        $count = $this->subscribe();
        $this->comment('执行完成个数:' . $count);
    }

    /**
     * @return mixed
     */
    public function subscribe ()
    {
//        $subscribes = Subscription::where('pushed_time', '=', Carbon::today()->timestamp)
//            ->where('hours', Carbon::now()->hour)
//            ->limit(200)
//            ->get();
        $subscribes = Subscription::with(['author'])
            ->where('pushed_time', '=', Carbon::today()->timestamp)
            ->where('hours', 8)
            ->limit(200)
            ->get();
        if ($subscribes->isEmpty()) return 0;

        foreach ($subscribes as $subscribe) {
            $notes = $this->getUserPushingContents(explode(',', $subscribe->tag_ids));
            $this->pushingNoteToQueue($notes, $subscribe);
            $subscribe->pushed_time = Carbon::today()->addDays(1)->timestamp;
            // $subscribe->save();
        }
        return $subscribes->count();
    }

    /**
     * @param       $user_id
     * @param array $tags
     * @return array
     */
    public function getUserPushingContents (array $tags)
    {
        foreach ($tags as $tag_id) {
            $notes = Note::with(['tag'])
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
     * @param $notes
     */
    public function pushingNoteToQueue ($notes, $subscribe)
    {

        $when = $this->getDelayingTime($subscribe);
        $message = (new MailDeliver($notes))
            ->onQueue('emails');
        Mail::to($subscribe->author->email)
            ->later($when, $message);
    }

    /**
     * @param $subscribe
     * @return float|int|string
     */
    public function getDelayingTime ($subscribe)
    {
        $timeString = "$subscribe->hours:$subscribe->minutes";
        $sendTimeStamp = Carbon::createFromTimeString($timeString)->addDays(1)->timestamp;
        return $sendTimeStamp - time();

    }
}
