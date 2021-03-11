<?php

namespace App\Console\Commands;

use App\Mail\MailDeliver;
use App\Models\Note;
use App\Models\Subscription;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
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
        Log::info('发布用户的推送任务执行时间：' . now()->toDayDateTimeString());
    }

    /**
     * @return mixed
     */
    public function subscribe ()
    {

        $subscribes = Subscription::with(['author'])
            ->where('pushed_time', '<', Carbon::today()->timestamp)
            ->where('hours', '<=', $this->getQueryTime())
            ->limit(200)
            ->get();


        if ($subscribes->isEmpty()) {
//            Log::info('没有任务发布：'.now()->toDayDateTimeString());
            return 0;
        }

        foreach ($subscribes as $subscribe) {
            $notes = $this->getUserPushingContents($subscribe->tag_ids);
            $this->pushingNoteToQueue($notes, $subscribe);
            $subscribe->refresh();
            $subscribe->pushed_time = time();
            $subscribe->save();
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

    private function getQueryTime ($durationTime = 1)
    {
        return Carbon::now()->hour + $durationTime < 23 ? Carbon::now()->hour + $durationTime : 0;
    }

    /**
     * @param $subscribe
     * @return float|int|string
     */
    public function getDelayingTime ($subscribe)
    {
        $timeString = "$subscribe->hours:$subscribe->minutes";
        $sendTimeStamp = Carbon::createFromTimeString($timeString)->timestamp;
        return ($sendTimeStamp - time()) > 0 ? $sendTimeStamp - time() : 30;

    }
}
