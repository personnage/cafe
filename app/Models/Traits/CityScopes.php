<?php

namespace App\Models\Traits;

trait CityScopes
{
    /**
     * Scope a query to only include main cities.
     *
     * @param  \Illuminate\Database\Eloquent\Builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMainCities($query)
    {
        return $query->whereIn('domain', ['msk', 'spb']);
    }

    /**
     * Scope a query to only include big cities.
     *
     * @param  \Illuminate\Database\Eloquent\Builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeBigCities($query)
    {
        return $query->whereIn('domain', [
            'ekburg', 'kazan', 'krasnodar', 'nnov', 'rnd', 'vrn'
        ]);
    }

    /**
     * Scope a query to only include other cities.
     *
     * @param  \Illuminate\Database\Eloquent\Builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLittleCities($query)
    {
        return $query->whereNotIn('id', value(function () {
            return static::mainCities()
                ->orWhere(function ($query) {
                    $query->europeCities();
                })
                ->orWhere(function ($query) {
                    $query->bigCities();
                })
                ->pluck('id')
            ;
        }));
    }

    /**
     * Scope a query to only include europe cities/country.
     *
     * @param  \Illuminate\Database\Eloquent\Builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeEuropeCities($query)
    {
        return $query->whereIn('domain', ['eesti', 'fin']);
    }
}
