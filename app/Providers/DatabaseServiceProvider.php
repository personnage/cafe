<?php

namespace App\Providers;

use App\Repositories\CachingCityRepository;
use App\Repositories\CityRepository;
use App\Repositories\EloquentCityRepository;

use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CityRepository::class, function () {
            return new CachingCityRepository(
                new EloquentCityRepository(), $this->app['cache.store']
            );
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [CityRepository::class];
    }
}
