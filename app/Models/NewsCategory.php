<?php

namespace App\Models;

class NewsCategory extends Model
{
    public $timestamps = false;

    public function image()
    {
        return $this->hasOne(NewsCategoryImage::class);
    }

    public function items()
    {
        return $this->hasMany(NewsItem::class);
    }
}
