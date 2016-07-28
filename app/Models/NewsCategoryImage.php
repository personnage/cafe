<?php

namespace App\Models;

class NewsCategoryImage extends Model
{
    public function category()
    {
        return $this->belongsTo(NewsCategory::class);
    }
}
