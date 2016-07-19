<?php

namespace App\Events\User;

use App\Models\User;

class Confirmed extends Event
{
    /**
     * @var User
     */
    public $user;

    /**
     * Users who confirmed.
     *
     * @var User
     */
    public $by;

    public function __construct(User $user, User $by)
    {
        $this->user = $user;
        $this->by = $by;
    }
}
