<?php

namespace App\Events\Role;

use App\Models\Role;
use App\Models\User;

class WasChanged extends Event
{
    public $role;
    public $updater;

    public function __construct(Role $role, User $updater)
    {
        $this->role = $role;
        $this->updater = $updater;
    }
}
