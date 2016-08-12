<?php

namespace App\Models;

use Storage;
use App\Jobs\ReleaseNewsItem;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsItem extends Model
{
    use SoftDeletes, Scopes\NewsItem;

    /**
     * @var string Base path to saving thumbnail.
     */
    protected $thumbnailBasePath = 'thumbnails/news/items';

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
    protected $fillable = ['title', 'announcement', 'body',
        'thumbnail', 'comments_allowed', 'published', 'published_since'];

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
     * Set a URL friendly "slug" from the given name.
     *
     * This is method idempotence.
     *
     * @param  string  $value
     * @return string
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = str_slug($value);
    }

    /**
     * Get thumbnail name.
     *
     * @param  string  $value
     * @return string|null
     */
    public function getThumbnailAttribute($value)
    {
        if (! is_null($value)) {
            return $this->thumbnailBasePath.DIRECTORY_SEPARATOR.$value;
        }

        return $value;
    }

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

    /**
     * Get full path to thumbnail storage.
     *
     * @return string
     */
    public function thumbnailUrl()
    {
        return Storage::url($this->thumbnail);
    }

    /**
     * Upload thumbnail file to given news.
     *
     * @param  string|resource  $contents
     * @return bool
     */
    public function uploadThumbnail($contents)
    {
        $that = clone $this;
        $this->thumbnail = str_random();

        $result = Storage::disk('public')->put($this->thumbnail, $contents);

        if (! $result) {
            // restore thumbnail
            $this->thumbnail = $that->thumbnail;

            return $result;
        }

        dispatch(new ReleaseNewsItem($that));

        return true;
    }
}
