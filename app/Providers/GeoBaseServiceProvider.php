<?php

namespace App\Providers;

use GeoIp2\Database\Reader;
use Illuminate\Support\ServiceProvider;

class GeoBaseServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('geobase', function ($app) {
            return new Reader(config('geobase.database'), config('geobase.locales'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['geobase'];
    }
}
