<?php

namespace App\Listeners\Login;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class NotificationOnEmail implements ShouldQueue
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
     * Send notification (subscribers only) after the login.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $user = $event->user;

        Mail::send('emails.notification', compact('user'), function($m) use ($user) {
            $m->from('noreply@allcafe.ru', 'AllCafe Application');

            $m->to($user->getEmailForNotification(), $user->name)
              ->subject('Notification for you!');
        });
    }
}
