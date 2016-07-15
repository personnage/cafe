<?php

namespace App\Events\User;

use App\Models\User;

class Impersonated extends Event
{
    /**
     * @var User
     */
    public $user;

    /**
     * @var User
     */
    public $impersonator;

    public function __construct(User $user, User $impersonator)
    {
        $this->user = $user;
        $this->impersonator = $impersonator;
    }
}
