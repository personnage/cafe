<?php

namespace App\Events\User;

use App\Models\User;

class WasDeleted extends Event
{
    public $user;
    public $by;
    public $forever;

    /**
     * @param User   $user
     * @param User   $by
     * @param bool   $forever
     */
    public function __construct(User $user, User $by, $forever)
    {
        $this->user = $user;
        $this->by = $by;
        $this->forever = $forever;
    }
}
