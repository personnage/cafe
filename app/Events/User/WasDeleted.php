<?php

namespace App\Events\User;

use App\Models\User;

class WasDeleted extends Event
{
    /**
     * @var User
     */
    public $user;

    /**
     * @var User
     */
    public $by;

    public function __construct(User $user, User $by)
    {
        $this->user = $user;
        $this->by = $by;
    }
}
