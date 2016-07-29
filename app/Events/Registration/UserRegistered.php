<?php

namespace App\Events\Registration;

use App\Events\Event;
use App\Models\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserRegistered extends Event
{
    use SerializesModels;

    /**
     * @var User
     */
    public $user;

    /**
     * Indicates if the user should be "confirmed".
     *
     * @var bool
     */
    public $confirm;

    /**
     * Create a new event instance.
     *
     * @param  User  $user
     * @param  bool  $confirm
     * @return void
     */
    public function __construct(User $user, $confirm)
    {
        $this->user = $user;
        $this->confirm = $confirm;
    }
}
