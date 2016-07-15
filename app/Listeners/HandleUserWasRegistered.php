<?php

namespace App\Listeners;

use App\Events\User\WasRegistered;
use App\Jobs\SendConfirmationToEmail;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandleUserWasRegistered implements ShouldQueue
{
    public function handle(WasRegistered $event)
    {
        dispatch(new SendConfirmationToEmail($event->user));

        //
    }
}
