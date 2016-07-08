<?php

namespace App\Events\User;

use App\Events\Event as BaseEvent;
use Illuminate\Queue\SerializesModels;

/**
 * Base class for user events.
 */
class Event extends BaseEvent
{
    use SerializesModels;
}
