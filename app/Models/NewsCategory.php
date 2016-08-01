<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class NewsCategory extends Model
{
    use SoftDeletes;

    public function image()
    {
        return $this->hasOne(NewsCategoryImage::class);
    }

    public function items()
    {
        return $this->hasMany(NewsItem::class);
    }
}
