<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class NewsCategory extends Model
{
    use SoftDeletes, Scopes\NewsCategory;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'title', 'description'];

    public function image()
    {
        return $this->hasOne(NewsCategoryImage::class);
    }

    public function items()
    {
        return $this->hasMany(NewsItem::class);
    }

    public function parent()
    {
        return $this->hasOne(static::class, 'id', 'parent_id');
    }

    public function childs()
    {
        return $this->hasMany(static::class, 'parent_id', 'id');
    }
}
