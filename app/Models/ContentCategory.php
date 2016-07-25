<?php

namespace App\Models;

class ContentCategory extends Model
{
    public $timestamps = false;

    public function type()
    {
        return $this->belongsTo(ContentCategoryType::class);
    }

    public function image()
    {
        return $this->hasOne(ContentCategoryImage::class);
    }
}
