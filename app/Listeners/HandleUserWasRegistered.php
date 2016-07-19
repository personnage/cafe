<?php

namespace App\Listeners;

use App\Events\User\Registered;
use App\Jobs\SendConfirmationToEmail;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandleUserWasRegistered implements ShouldQueue
{
    public function handle(Registered $event)
    {
        dispatch(new SendConfirmationToEmail($event->user));

        //
    }
}
