<?php

namespace App\Models\Scopes;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait Published
{
    /**
     * Scope a query to only include published items.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished(Builder $query)
    {
        $query->where($this->getQualifiedPublishedColumn(), true);
    }

    /**
     * Scope a query to exclude published items.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNotPublished(Builder $query)
    {
        $query->where($this->getQualifiedPublishedColumn(), false);
    }

    /**
     * Scope a query to only include pending items.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePending(Builder $query)
    {
        return $query->where($this->getQualifiedPublishedSinceColumn(), '>', Carbon::now());
    }

    /**
     * Scope a query to exclude pending items.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNotPending(Builder $query)
    {
        return $query->where($this->getQualifiedPublishedSinceColumn(), '<=', Carbon::now());
    }

    /**
     * Determine if the model instance has been pending.
     *
     * @return bool
     */
    public function isPending()
    {
        return $this->{$this->getPublishedSinceColumn()} > Carbon::now();
    }

    /**
     * Determine if the model instance has been pending.
     *
     * @return bool
     */
    public function isNotPending()
    {
        return ! $this->isPending();
    }

    /**
     * Determine if the model instance has been pending.
     *
     * @return bool
     */
    public function isPublished()
    {
        return (bool) $this->{$this->getPublishedColumn()};
    }

    /**
     * Determine if the model instance has been pending.
     *
     * @return bool
     */
    public function isNotPublished()
    {
        return ! $this->isPublished();
    }

    /**
     * Publishing model instance.
     *
     * @return bool|null
     */
    public function publish()
    {
        $this->{$this->getPublishedColumn()} = true;

        return $this->save();
    }

    /**
     * Revoking model instance.
     *
     * @return bool|null
     */
    public function revoke()
    {
        $this->{$this->getPublishedColumn()} = false;

        return $this->save();
    }

    /**
     * Get the name of the "published" column.
     *
     * @return string
     */
    protected function getPublishedColumn()
    {
        return defined('static::PUBLISHED') ? static::PUBLISHED : 'published';
    }

    /**
     * Get the name of the "published since" column.
     *
     * @return string
     */
    protected function getPublishedSinceColumn()
    {
        return defined('static::PUBLISHED_SINCE') ? static::PUBLISHED_SINCE : 'published_since';
    }

    /**
     * Get the fully qualified "published" column.
     *
     * @return string
     */
    protected function getQualifiedPublishedColumn()
    {
        return $this->getTable().'.'.$this->getPublishedColumn();
    }

    /**
     * Get the fully qualified "published since" column.
     *
     * @return string
     */
    protected function getQualifiedPublishedSinceColumn()
    {
        return $this->getTable().'.'.$this->getPublishedSinceColumn();
    }
}
