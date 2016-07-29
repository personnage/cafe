<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    /**
     * Get only admins users.
     *
     * @return [type] [description]
     */
    public function admins()
    {
        return User::admins()->get();
    }

    /**
     * Get latest users.
     *
     * @return [type] [description]
     */
    public function latest()
    {
        return User::latest()->get();
    }
}
