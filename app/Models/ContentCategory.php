<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
