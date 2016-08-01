<?php

namespace App\Models;

class NewsItemImage extends Model
{
    public $timestamps = false;

    public function content()
    {
        return $this->belongsTo(NewsItem::class);
    }
}
