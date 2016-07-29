<?php

namespace App\Repositories;

interface CityRepository
{
    /**
     * Get collections to all cities.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll();

    /**
     * Get collections to only include big cities.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getBigCities();

    /**
     * Get collections to only include main cities.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getMainCities();

    /**
     * Get collections to only include other cities.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getOtherCities();

    /**
     * Get collections to only include europe cities.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getEuropeCities();
}
