<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
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

    # Scopes

    public function scopeOrderNameAsc($query)
    {
        return $query->orderBy('name', 'asc');
    }

    public function scopeOrderNameDesc($query)
    {
        return $query->orderBy('name', 'desc');
    }

    public function scopeOrderIdAsc($query)
    {
        return $query->orderBy('id', 'asc');
    }

    public function scopeOrderIdDesc($query)
    {
        return $query->orderBy('id', 'desc');
    }

    public function scopeOrderUpdatedAtAsc($query)
    {
        return $query->orderBy('updated_at', 'asc');
    }

    public function scopeOrderUpdatedAtDesc($query)
    {
        return $query->orderBy('updated_at', 'desc');
    }

    public function scopeFilter($query, $filterName)
    {
        switch ($filterName) {
            case 'deleted':
                return $query->onlyTrashed();
            default:
                return $query;
        }
    }

    public function scopeSearch($query, $name)
    {
        $pattern = "%$name%";

        return $query->where('name', 'ILIKE', $pattern)
                  ->orWhere('label', 'ILIKE', $pattern)
       ;
    }

    public function scopeSort($query, $sortName)
    {
        switch ($sortName) {
            case 'name_asc':
                return $query->orderNameAsc();
            case 'id_desc':
                return $query->orderIdDesc();
            case 'id_asc':
                return $query->orderIdAsc();
            case 'updated_desc':
                return $query->orderUpdatedAtDesc();
            case 'updated_asc':
                return $query->orderUpdatedAtAsc();
            default:
                return $query;
        }
    }

    /**
     * Get roles to currently permission.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
