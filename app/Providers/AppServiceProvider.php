<?php

namespace App\Providers;

use App\Models\User;
use App\Events\User\Created  as UserWasCreated;
use App\Events\User\Deleted  as UserWasDeleted;
use App\Events\User\Restored as UserWasRestored;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->events();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    protected function events()
    {
        User::created(function ($user) {
            event(new UserWasCreated($user, auth()->user() ?? $user));
        });

        User::deleted(function ($user) {
            event(new UserWasDeleted($user, auth()->user()));
        });

        User::restored(function ($user) {
           event(new UserWasRestored($user, auth()->user()));
        });
    }
}
