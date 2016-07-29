<?php

namespace App\Repositories;

use App\Models\City;

class EloquentCityRepository implements CityRepository
{
    protected $mainDomainCities = [
        'msk',
        'spb',
    ];

    protected $bigDomainCities = [
        'ekburg',
        'kazan',
        'krasnodar',
        'nnov',
        'rnd',
        'vrn',
    ];

    protected $europeDomainCities = [
        'eesti',
        'fin',
    ];

    /**
     * @inheritdoc
     */
    public function getAll()
    {
        return City::all();
    }

    /**
     * @inheritdoc
     */
    public function getMainCities()
    {
        return City::whereIn('domain', $this->mainDomainCities)->get();
    }

    /**
     * @inheritdoc
     */
    public function getBigCities()
    {
        return City::whereIn('domain', $this->bigDomainCities)->get();
    }

    /**
     * @inheritdoc
     */
    public function getOtherCities()
    {
        return $this->getAll()->diff(
            $this->getMainCities()->merge(
                $this->getBigCities()->merge(
                    $this->getEuropeCities()
                )
            )
        );
    }

    /**
     * @inheritdoc
     */
    public function getEuropeCities()
    {
        return City::whereIn('domain', $this->europeDomainCities)->get();
    }
}
