<?php

namespace App\Events\Role;

use App\Events\Event as BaseEvent;
use Illuminate\Queue\SerializesModels;

/**
 * Base class for user events.
 */
class Event extends BaseEvent
{
    use SerializesModels;
}
