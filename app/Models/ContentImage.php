<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentImage extends Model
{
    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}
