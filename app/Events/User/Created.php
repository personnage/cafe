<?php

namespace App\Events\User;

use App\Models\User;

class Created extends Event
{
    /**
     * @var User
     */
    public $user;

    /**
     * @var User
     */
    public $creator;

    public function __construct(User $user, User $creator)
    {
        $this->user = $user;
        $this->creator = $creator;
    }
}
