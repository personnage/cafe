<?php

namespace App\Repositories;

use Cache;
use App\Models\User;

class UserRepository
{
    /**
     * Find user by email.
     *
     * @param  string $email
     * @return \App\Models\User|null
     */
    public function byEmail(string $email)
    {
        return User::whereEmail($email)->first();
    }

    /**
     * Get latest users.
     *
     * @return
     */
    public function latest()
    {
        return User::orderIdDesc()->take(10)->get();
    }

    /**
     * Get total count users without trashed users.
     *
     * This is method usage cache store.
     *
     * @param  bool  $stale  Cache will be reset, if $stale is False.
     * @return int
     */
    public function totalUsers(bool $stale = true)
    {
        if (! $stale) {
            Cache::forget('users:total');
        }

        return Cache::remember('users:total', 60, function () {
            return User::count();
        });
    }

    /**
     * Increment the value of an item in the cache.
     *
     * @param  mixed  $value
     * @return int|null
     */
    public function incrementTotalUsers($value = 1)
    {
        if (Cache::has('users:total')) {
            return Cache::increment('users:total', $value);
        }
    }

    /**
     * Decrement the value of an item in the cache.
     *
     * @param  mixed   $value
     * @return int|null
     */
    public function decrementTotalUsers($value = 1)
    {
        if (Cache::has('users:total')) {
            return Cache::decrement('users:total', $value);
        }
    }

    public function totalAdmins(bool $stale = true)
    {
        if (! $stale) {
            Cache::forget('admins:total');
        }

        return Cache::remember('admins:total', 60, function () {
            return User::admins()->count();
        });
    }

    /**
     * Increment the value of an item in the cache.
     *
     * @param  mixed  $value
     * @return int|null
     */
    public function incrementAdminsUsers($value = 1)
    {
        if (Cache::has('admins:total')) {
            return Cache::increment('admins:total');
        }
    }

    /**
     * Decrement the value of an item in the cache.
     *
     * @param  mixed   $value
     * @return int|null
     */
    public function decrementAdminsUsers($value = 1)
    {
        if (Cache::has('admins:total')) {
            return Cache::decrement('admins:total');
        }
    }
}
