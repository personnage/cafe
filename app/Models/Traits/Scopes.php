<?php

namespace App\Models\Traits;

/**
 * Cross scopes.
 */
trait Scopes
{
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
}
