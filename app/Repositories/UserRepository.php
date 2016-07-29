<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    /**
     * Get only admins users.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function admins()
    {
        return User::admins()->get();
    }

    /**
     * Get latest users.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function latest()
    {
        return User::latest()->get();
    }
}
