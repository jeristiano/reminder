<?php

namespace App\Console\Commands;

use App\Models\Note;
use App\Models\Subscription;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

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
        $subscribes = Subscription::where('pushed_time', '=', Carbon::today()->timestamp)
            ->where('hours', Carbon::now()->hour)
            ->limit(200)
            ->get();
        if ($subscribes->isEmpty()) return 0;

        foreach ($subscribes as $subscribe) {
            $notes = $this->getUserPushingContents(explode(',', $subscribe->tag_ids));
            $this->pushingNoteToQueue($notes);
            $subscribe->pushed_time = Carbon::today()->addDays(1)->timestamp;
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
            $notes = Note::with(['author'])
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
     * @return array
     */
    public function pushingNoteToQueue ($notes)
    {
        return [];
    }
}
