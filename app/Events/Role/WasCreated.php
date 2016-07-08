<?php

namespace App\Events\Role;

use App\Models\Role;
use App\Models\User;

class WasCreated extends Event
{
    public $role;
    public $creator;

    public function __construct(Role $role, User $creator)
    {
        $this->role = $role;
        $this->creator = $creator;
    }
}
