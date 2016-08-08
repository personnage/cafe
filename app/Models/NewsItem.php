<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class NewsItem extends Model
{
    use SoftDeletes, Published, Scopes\NewsItem;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'published_since'];

    /**
     * The casts attributes.
     *
     * @var array
     */
    protected $casts = ['published' => 'boolean'];

    /**
     * Get category to currently news.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(NewsCategory::class, 'news_category_id');
    }

    /**
     * Get author (user) to currently news.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
