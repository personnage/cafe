<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class NewsItem extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class);
    }
}
