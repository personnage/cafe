<?php

namespace App\Events\User;

use App\Models\User;

class WasConfirmed extends Event
{
    public $user;
    public $by;

    public function __construct(User $user, User $by = null)
    {
        $this->user = $user;
        $this->by = $by;
    }
}
