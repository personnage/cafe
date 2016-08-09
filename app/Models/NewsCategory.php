<?php

namespace App\Models;

use Storage;
use App\Jobs\ReleaseNewsCategory;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsCategory extends Model
{
    use SoftDeletes, Scopes\NewsCategory;

    /**
     * @var string Base path to saving thumbnail.
     */
    protected $thumbnailBasePath = 'thumbnails/news/category';

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
    protected $fillable = ['title', 'description', 'thumbnail'];

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

    /**
     * Get full path to thumbnail storage.
     *
     * @param  string  $filename
     * @return string
     */
    public function thumbnailUrl()
    {
        return Storage::url($this->thumbnail);
    }

    /**
     * Upload thumbnail file to given category.
     *
     * @param  string|resource  $contents]
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

        dispatch(new ReleaseNewsCategory($that));

        return true;
    }
}
