<?php

namespace App\Models;

class Content extends Model
{
    public function category()
    {
        return $this->belongsTo(ContentCategory::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class);
    }
}
