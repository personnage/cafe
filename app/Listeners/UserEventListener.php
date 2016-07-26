<?php

namespace App\Listeners;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Failed;

class UserEventListener
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    /**
     * Handle user login events.
     */
    public function onUserLoginAttempt($event)
    {
        switch (get_class($event)) {
            case Login::class:
                if ($event->user->isConfirmed()) {
                    $event->user->updateSignInCount($this->request->ip());
                }
                break;

            case Failed::class:
                $event->user->updateFailedAttempts();
                break;
        }
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            [Login::class, Failed::class],
            'App\Listeners\UserEventListener@onUserLoginAttempt'
        );
    }
}
