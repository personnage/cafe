<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentCategoryImage extends Model
{
    public function category()
    {
        return $this->belongsTo(ContentCategory::class);
    }
}
