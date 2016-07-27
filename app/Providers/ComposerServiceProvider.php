<?php

namespace App\Providers;

use App\Models\City;
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
    }

    protected function compose()
    {
        view()->composer('layouts.application._header', function ($view) {
            $view->with('cities', City::all());
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
