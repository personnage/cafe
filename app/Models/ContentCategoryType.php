<?php

namespace App\Models;

class ContentCategoryType extends Model
{
    public $timestamps = false;

    public function categories()
    {
        return $this->hasMany(ContentCategory::class);
    }
}
