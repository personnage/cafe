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

    /**
     * Fetch user by email address.
     *
     * @param  string $email
     * @return [type]        [description]
     */
    public function byEmail(string $email)
    {
        return User::where('email', $email)->first();
    }
}
