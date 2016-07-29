<?php

namespace App\Providers;

use App\Repositories\CityRepository;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->compose();

        //
    }

    protected function compose()
    {
        view()->composer('layouts.application._header', function ($view) {
            $view->with('cities', $this->app->make(CityRepository::class)->getAll());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
