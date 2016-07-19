<?php

namespace App\Models\Traits;

trait PermissionScopes
{
    use Scopes;

    public function scopeOrderNameAsc($query)
    {
        return $query->orderBy('name', 'asc');
    }

    public function scopeOrderNameDesc($query)
    {
        return $query->orderBy('name', 'desc');
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
}
