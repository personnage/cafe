<?php

namespace App\Models\Traits;

use App\Models\Role;

trait HasRoles
{
    /**
     * Get roles to currently user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Detect if user contain given role.
     *
     * $user->hasRole('manager') or $user->hasRole($collections)
     *
     * @param  \Illuminate\Database\Eloquent\Collection|string  $role
     * @return boolean
     */
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        return (bool) $role->intersect($this->roles)->count();
    }

    /**
     * Bind user with role.
     *
     * @param  string  $role
     * @return void
     */
    public function actAs(string $role)
    {
        $this->roles()->save(
            Role::whereName($role)->firstOrFail()
        );
    }

    /**
     * Bind user with role.
     *
     * @param  Role   $role
     * @return void
     */
    public function assignRole(Role $role)
    {
        $this->roles()->attach($role);
    }

    /**
     * Unbind user from role.
     *
     * @param  Role   $role
     * @return void
     */
    public function cancelRole(Role $role)
    {
        $this->roles()->detach($role);
    }
}
