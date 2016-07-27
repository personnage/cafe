<?php

namespace App\Listeners\Confirmation;

use Mail;
use App\Events\Confirmation\UserConfirmRegistration;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendWelcomeToEmail implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  UserConfirmRegistration  $event
     * @return void
     */
    public function handle(UserConfirmRegistration $event)
    {
        $this->sendMessage($event->user);
    }

    /**
     * Send welcome message to email after success confirm.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function sendMessage($user)
    {
        Mail::send('auth.emails.welcome', compact('user'), function($message) use ($user) {
            $message
                ->from('noreply@allcafe.ru', 'AllCafe Application')
                ->to($user->getEmailForConfirmation(), $user->name)
                ->subject('Welcome!')
            ;
        });
    }
}
