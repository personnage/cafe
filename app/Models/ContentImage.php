<?php

namespace App\Models;

class ContentImage extends Model
{
    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}
