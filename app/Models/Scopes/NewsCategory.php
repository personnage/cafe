<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;

trait NewsCategory
{
    /**
     * Scope a query to only include roots categories.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRoots(Builder $query)
    {
        return $query->whereNull('parent_id');
    }

    /**
     * Scope a query to only include deleted categories.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  string                                $filterName
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFilter(Builder $query, $filterName)
    {
        switch ($filterName) {
            case 'deleted':
                return $query->onlyTrashed();
            default:
                return $query;
        }
    }

    /**
     * Scope a query to only include categories match to title attr.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  string                                $name
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch(Builder $query, string $name)
    {
        return $query->where('title', 'ILIKE', "%$name%");
    }

    /**
     * Scope a query apply sort to query.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  string                                $sortName
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSort(Builder $query, $sortName)
    {
        switch ($sortName) {
            case 'name_asc':
                return $query->orderBy('name', 'asc');
            case 'id_desc':
                return $query->orderBy('id', 'desc');
            case 'id_asc':
                return $query->orderBy('id', 'acs');
            case 'updated_desc':
                return $query->orderBy('updated_at', 'desc');
            case 'updated_asc':
                return $query->orderBy('updated_at', 'asc');
            default:
                return $query;
        }
    }
}
