<?php

namespace App\Listeners\Login;

use Carbon\Carbon;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;

class UpdateSigninable
{
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
     * Set or update fields of the current login to application.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $user = $event->user;

        $user->forceFill([
            'last_sign_in_at' => $user->current_sign_in_at ?? Carbon::now(),
            'current_sign_in_at' => Carbon::now(),

            'last_sign_in_ip' => $user->current_sign_in_ip ?? $this->request->ip(),
            'current_sign_in_ip' => $this->request->ip(),
        ])->save();

        $user->increment('sign_in_count');
    }
}
