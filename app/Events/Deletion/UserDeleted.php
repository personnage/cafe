<?php

namespace App\Events\Deletion;

use App\Models\User;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserDeleted extends Event
{
    use SerializesModels;

    public $user;
    public $byUser;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, User $byUser)
    {
        $this->user = $user;
        $this->byUser = $byUser;
    }
}
