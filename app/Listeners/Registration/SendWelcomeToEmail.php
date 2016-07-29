<?php

namespace App\Listeners\Registration;

use Mail;
use App\Jobs\SendConfirmationToEmail;
use App\Events\Registration\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendWelcomeToEmail implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        if ($event->confirm) {
            $this->sendConfirmationToEmail($event->user);
        } else {
            $this->sendWelcomeToEmail($event->user);
        }
    }

    /**
     *
     * @param  User  $user
     * @return void
     */
    protected function sendConfirmationToEmail($user)
    {
        dispatch(new SendConfirmationToEmail($user));
    }

    /**
     *
     * @param  User  $user
     * @return void
     */
    protected function sendWelcomeToEmail($user)
    {
        Mail::send('auth.emails.welcome', compact('user'), function ($msg) use ($user) {
            $msg->from('noreply@allcafe.ru', 'AllCafe Application')
                ->to($user->email, $user->name)
                ->subject('Welcome');
        });
    }
}
