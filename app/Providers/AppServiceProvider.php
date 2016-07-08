<?php

namespace App\Providers;

use App\Models\User;
use App\Events\User\WasRestored;
use App\Events\User\WasDeleted;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::restored(function ($user) {
            event(new WasRestored($user, auth()->user()));
        });
        User::deleted(function ($user) {
            try {
                User::withTrashed()->findOrFail($user->id);
                event(new WasDeleted($user, auth()->user(), false));
            } catch (ModelNotFoundException $e) {
                // or was destroyed...
                event(new WasDeleted($user, auth()->user(), true));
            }
        });
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
}
