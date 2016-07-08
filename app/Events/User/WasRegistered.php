<?php

namespace App\Events\User;

use App\Models\User;

class WasRegistered extends Event
{
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
