<?php

namespace App\Models;

class NewsItemImage extends Model
{
    public function content()
    {
        return $this->belongsTo(NewsItem::class);
    }
}
