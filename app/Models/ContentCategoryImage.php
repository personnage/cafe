<?php

namespace App\Models;

class ContentCategoryImage extends Model
{
    public function category()
    {
        return $this->belongsTo(ContentCategory::class);
    }
}
