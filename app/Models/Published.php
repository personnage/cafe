<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Builder;

trait Published
{
    /**
     * Boot the "It can be published" trait for a model.
     *
     * @return void
     */
    public static function bootPublished()
    {
        static::addGlobalScope(static::getScopeObject());
    }

    /**
     * Create global scope object.
     *
     * @return @anonymous
     */
    public static function getScopeObject()
    {
        return new class implements Scope {
            /**
             * All of the extensions to be added to the builder.
             *
             * @var array
             */
            protected $extensions = [
                'WithPending',
                'WithRevoked',
                'OnlyPending',
                'OnlyRevoked',
                'OnlyInactive',
            ];

            /**
             * Apply the scope to a given Eloquent query builder.
             *
             * ```
             * WHERE published = true
             * AND published_since <= :NOW
             * ```
             *
             * @param  \Illuminate\Database\Eloquent\Builder  $builder
             * @param  \Illuminate\Database\Eloquent\Model    $model
             * @return void
             */
            public function apply(Builder $builder, EloquentModel $model)
            {
                $builder->where([
                    [$model->getQualifiedPublishedColumn(), true],
                    [$model->getQualifiedPublishedSinceColumn(), '<=', Carbon::now()]
                ]);
            }

            /**
             * Extend the query builder with the needed functions.
             *
             * @param  \Illuminate\Database\Eloquent\Builder  $builder
             * @return void
             */
            public function extend(Builder $builder)
            {
                foreach ($this->extensions as $extension) {
                    $this->{"add{$extension}"}($builder);
                }
            }

            /**
             * Add the with-pending extension to the builder.
             *
             * @param  \Illuminate\Database\Eloquent\Builder  $builder
             * @return void
             */
            protected function addWithPending(Builder $builder)
            {
                $builder->macro('withPending', function (Builder $builder) {
                    $model = $builder->getModel();

                    return $builder->withoutGlobalScope($this)
                        ->where($model->getQualifiedPublishedColumn(), true);
                });
            }

            /**
             * Add the with-revoked extension to the builder.
             *
             * @param  \Illuminate\Database\Eloquent\Builder  $builder
             * @return void
             */
            protected function addWithRevoked(Builder $builder)
            {
                $builder->macro('withRevoked', function (Builder $builder) {
                    $model = $builder->getModel();

                    return $builder->withoutGlobalScope($this)
                        ->where($model->getQualifiedPublishedSinceColumn(), '<=', Carbon::now());
                });
            }

            /**
             * Add the only-pending extension to the builder.
             *
             * @param  \Illuminate\Database\Eloquent\Builder  $builder
             * @return void
             */
            protected function addOnlyPending(Builder $builder)
            {
                $builder->macro('onlyPending', function (Builder $builder) {
                    $model = $builder->getModel();

                    return $builder->withoutGlobalScope($this)->where([
                        [$model->getQualifiedPublishedColumn(), true],
                        [$model->getQualifiedPublishedSinceColumn(), '>', Carbon::now()]
                    ]);
                });
            }

            /**
             * Add the only-revoked extension to the builder.
             *
             * @param  \Illuminate\Database\Eloquent\Builder  $builder
             * @return void
             */
            protected function addOnlyRevoked(Builder $builder)
            {
                $builder->macro('onlyRevoked', function (Builder $builder) {
                    $model = $builder->getModel();

                    return $builder->withoutGlobalScope($this)
                        ->where($model->getQualifiedPublishedColumn(), false);
                });
            }

            /**
             * Add the only-inactive extension to the builder.
             *
             * pending + revoked
             *
             * @param  \Illuminate\Database\Eloquent\Builder  $builder
             * @return void
             */
            protected function addOnlyInactive(Builder $builder)
            {
                $builder->macro('onlyInactive', function (Builder $builder) {
                    $model = $builder->getModel();

                    return $builder->withoutGlobalScope($this)
                        ->where($model->getQualifiedPublishedColumn(), false)
                        ->orWhere($model->getQualifiedPublishedSinceColumn(), '>', Carbon::now())
                    ;
                });
            }
        };
    }

    /**
     * Publishing model instance. (Only turn on "published" column!)
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
     * Determine if the model instance has been revoked.
     *
     * @return bool
     */
    public function revoked()
    {
        return ! $this->{$this->getPublishedColumn()};
    }

    /**
     * Determine if the model instance has been pending.
     *
     * @return bool
     */
    public function pending()
    {
        return $this->{$this->getPublishedSinceColumn()} > Carbon::now();
    }

    /**
     * Get the name of the "published" column.
     *
     * @return string
     */
    public function getPublishedColumn()
    {
        return defined('static::PUBLISHED') ? static::PUBLISHED : 'published';
    }

    /**
     * Get the name of the "published since" column.
     *
     * @return string
     */
    public function getPublishedSinceColumn()
    {
        return defined('static::PUBLISHED_SINCE') ? static::PUBLISHED_SINCE : 'published_since';
    }

    /**
     * Get the fully qualified "published" column.
     *
     * @return string
     */
    public function getQualifiedPublishedColumn()
    {
        return $this->getTable().'.'.$this->getPublishedColumn();
    }

    /**
     * Get the fully qualified "published since" column.
     *
     * @return string
     */
    public function getQualifiedPublishedSinceColumn()
    {
        return $this->getTable().'.'.$this->getPublishedSinceColumn();
    }
}
