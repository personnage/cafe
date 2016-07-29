<?php

namespace App\Repositories;

use Illuminate\Contracts\Cache\Repository as Cache;

class CachingCityRepository implements CityRepository
{
    /**
     * @var Cache
     */
    protected $cache;

    /**
     * @var CityRepository
     */
    protected $repository;

    /**
     * Create new instance.
     *
     * @param CityRepository $repository
     * @param Cache          $cache
     */
    public function __construct(CityRepository $repository, Cache $cache)
    {
        $this->cache = $cache;
        $this->repository = $repository;
    }

    /**
     * @inheritdoc
     */
    public function getAll()
    {
        return $this->cache->remember('cities.all', 60, function () {
            return $this->repository->getAll();
        });
    }

    /**
     * @inheritdoc
     */
    public function getBigCities()
    {
        return $this->cache->remember('cities.big', 60, function () {
            return $this->repository->getBigCities();
        });
    }

    /**
     * @inheritdoc
     */
    public function getMainCities()
    {
        return $this->cache->remember('cities.main', 60, function () {
            return $this->repository->getMainCities();
        });
    }

    /**
     * @inheritdoc
     */
    public function getOtherCities()
    {
        return $this->cache->remember('cities.other', 60, function () {
            return $this->repository->getOtherCities();
        });
    }

    /**
     * @inheritdoc
     */
    public function getEuropeCities()
    {
        return $this->cache->remember('cities.europe', 60, function () {
            return $this->repository->getEuropeCities();
        });
    }
}
