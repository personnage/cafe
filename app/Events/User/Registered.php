<?php

namespace App\Events\User;

use App\Models\User;

class Registered extends Event
{
    /**
     * @var User
     */
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
