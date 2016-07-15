<?php

namespace App\Listeners;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandleUserWasLogin
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
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

        $this->updateSignInfo($user);
    }

    protected function updateSignInfo($user)
    {
        if (! $user->isConfirmed()) {
            return ;
        }

        $user->increment('sign_in_count');

        $user->forceFill([
            'last_sign_in_at' => $user->current_sign_in_at ?? Carbon::now(),
            'current_sign_in_at' => Carbon::now(),

            'last_sign_in_ip' => $user->current_sign_in_ip ?? $this->request->ip(),
            'current_sign_in_ip' => $this->request->ip(),
        ])->save();
    }
}
