<?php

namespace App\Repositories;

use App\Models\City;

class CityRepository
{
    /**
     * Get collections to only include main cities.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function mainCities()
    {
        return City::mainCities()->get();
    }

    /**
     * Get collections to only include big cities.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function bigCities()
    {
        return City::bigCities()->get();
    }

    /**
     * Get collections to only include other cities.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function littleCities()
    {
        return City::littleCities()->get();
    }

    /**
     * Get collections to only include europe cities/countries.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function europeCities()
    {
        return City::europeCities()->get();
    }
}
