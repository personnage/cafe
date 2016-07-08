<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'label'];

    /**
     * Get permissions to currently role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    /**
     * Give permission to currently role.
     *
     * @param  \App\Models\Permission  $permission
     * @return \App\Models\Permission
     */
    public function givePermissionTo(Permission $permission)
    {
        return $this->permissions()->save($permission);
    }

    /**
     * Revoke permission to roles.
     *
     * @param  \App\Models\Permission  $permission
     * @return \App\Models\Role
     */
    public function revokePermissionTo(Permission $permission)
    {
        // Warning
        return $this->permissions()->newPivotStatement()->delete();
    }
}
