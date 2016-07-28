<?php

namespace App\Models;

class NewsItem extends Model
{
    public function category()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class);
    }
}
