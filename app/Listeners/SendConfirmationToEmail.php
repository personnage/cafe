<?php

namespace App\Listeners;

use App\Events\Registration\UserRegistered;
use App\Jobs\SendConfirmationToEmail as SendConfirmation;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendConfirmationToEmail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        dispatch(new SendConfirmation($event->user));

        //
    }
}
