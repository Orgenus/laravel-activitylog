<?php

namespace Spatie\Activitylog\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Spatie\Activitylog\Messages\ActivityMessage;

class ActivityEvents
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $payload;

    public function __construct(ActivityMessage $message){
        $this->payload = $message;
    }
}
