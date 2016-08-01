<?php

namespace App\Models;

class NewsCategoryImage extends Model
{
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(NewsCategory::class);
    }
}
