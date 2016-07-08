<?php

namespace App\Events\User;

use App\Models\User;

class WasRestored extends Event
{
    public $user;
    public $by;

    public function __construct(User $user, User $by)
    {
        $this->user = $user;
        $this->by = $by;
    }
}
