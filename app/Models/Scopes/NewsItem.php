<?php

namespace App\Models\Scopes;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait NewsItem
{
    use Published;

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
            case 'inactive':
                return $query->notPublished();
            case 'pending':
                return $query->pending()->published();
            default:
                return $query->notPending()->published();
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
                return $query->orderBy('id', 'asc');
            case 'updated_desc':
                return $query->orderBy('updated_at', 'desc');
            case 'updated_asc':
                return $query->orderBy('updated_at', 'asc');
            case 'published_since_asc':
                return $query->orderBy('published_since', 'asc');
            default:
                return $query->orderBy('published_since', 'desc');
        }
    }
}
