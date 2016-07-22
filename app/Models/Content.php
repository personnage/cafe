<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'content';

    public function category()
    {
        return $this->belongsTo(ContentCategory::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class);
    }
}
