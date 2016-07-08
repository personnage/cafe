<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Create new user instance. Only administrator.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function create(User $user)
    {
        return $user->admin;
    }

    // public function update(User $user, User $user)
    // {
    //     // pass
    // }

    // public function delete(User $user, User $user)
    // {
    //     // pass
    // }

    // public function destroy(User $user, User $user)
    // {
    //     // pass
    // }
}
