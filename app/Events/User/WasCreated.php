<?php

namespace App\Events\User;

use App\Models\User;

class WasCreated extends Event
{
    public $user;
    public $creator;

    public function __construct(User $user, User $creator)
    {
        $this->user = $user;
        $this->creator = $creator;
    }
}
