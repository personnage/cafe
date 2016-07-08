<?php

namespace App\Listeners;

use App\Events\User\WasCreated;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendResetLinkEmail /*implements ShouldQueue*/
{
    use ResetsPasswords, ValidatesRequests;

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Force generate link to reset password for given user.
     *
     * @param  WasCreated $event
     * @return void
     */
    public function handle(WasCreated $event)
    {
        $this->sendResetLinkEmail($this->request);
    }
}
