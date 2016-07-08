<?php

namespace App\Events\Role;

use App\Models\Role;
use App\Models\User;

class WasDeleted extends Event
{
    public $role;
    public $user;
    public $forever;

    public function __construct(Role $role, User $user, $forever)
    {
        $this->role = $role;
        $this->user = $user;
        $this->forever = $forever;
    }
}
