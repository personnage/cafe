<?php

namespace App\Events\User;

use App\Models\User;

class WasChanged extends Event
{
    public $user;
    public $updater;

    public function __construct(User $user, User $updater)
    {
        $this->user = $user;
        $this->updater = $updater;
    }
}
