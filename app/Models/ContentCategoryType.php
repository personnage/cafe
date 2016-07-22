<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentCategoryType extends Model
{
    public $timestamps = false;

    public function categories()
    {
        return $this->hasMany(ContentCategory::class);
    }
}
