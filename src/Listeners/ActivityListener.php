<?php

namespace Spatie\Activitylog\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Spatie\Activitylog\Events\ActivityEvents;

class ActivityListener implements ShouldQueue
{
    use InteractsWithQueue;

    public $queue = "activity_log";
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->queue = config('activitylog.queue');
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ActivityEvents $event)
    {

    }
}
