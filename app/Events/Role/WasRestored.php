<?php

namespace App\Events\Role;

use App\Models\Role;
use App\Models\User;

class WasRestored extends Event
{
    public $role;
    public $user;

    public function __construct(Role $role, User $user)
    {
        $this->role = $role;
        $this->user = $user;
    }
}
