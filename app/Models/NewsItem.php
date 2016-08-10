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
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'title',
        'announcement',
        'body',
        'comments_allowed',
        'published',
        'published_since',
    ];

    /**
     * The casts attributes.
     *
     * @var array
     */
    protected $casts = [
        'published' => 'boolean',
        'comments_allowed' => 'boolean',
    ];

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

    /**
     * URL новости
     *
     * @return string
     */
    public function url()
    {
        return route('news.items.show', [
            'year'  => $this->published_since->format('Y'),
            'month' => $this->published_since->format('m'),
            'day'   => $this->published_since->format('d'),
            'itemName' => $this->name,
        ]);
    }

    /**
     * Дата/время публикации новости (для листинга)
     * TODO возможно, стоит выбрать другой формат (например, "9 августа 2016 в 8:42")
     *
     * @return string
     */
    public function getPublishedDateTime()
    {
        return $this->published_since->format('d.m в H:i');
    }
}
