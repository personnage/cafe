<?php

namespace App\Providers;

use App\Models\{User, Role};

use App\Events\Role\{
    WasChanged as RoleWasChanged,
    WasCreated as RoleWasCreated,
    WasDeleted as RoleWasDeleted,
    WasRestored as RoleWasRestored
};

use App\Events\User\{
    WasChanged as UserWasChanged,
    WasCreated as UserWasCreated,
    WasDeleted as UserWasDeleted,
    WasRegistered as UserWasRegistered,
    WasRestored as UserWasRestored
};

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
        Role::created(function ($role) {
            // If create role from factory, user not exist.
            auth()->check() &&
            event(new RoleWasCreated($role, auth()->user()));
        });

        Role::updated(function ($role) {
            event(new RoleWasChanged($role, auth()->user()));
        });

        Role::deleted(function ($role) {
            event(new RoleWasDeleted($role, auth()->user(), true));
        });

        Role::restored(function ($role) {
           event(new RoleWasRestored($role, auth()->user()));
        });

        User::created(function ($user) {
            if (is_null($user->created_by_id)) {
                event(new UserWasRegistered($user));
            } else {
                event(new UserWasCreated($user, auth()->user()));
            }
        });

        User::updated(function ($user) {
            event(new UserWasChanged($user, auth()->user()));
        });

        User::deleted(function ($user) {
            event(new UserWasDeleted($user, auth()->user(), true));
        });

        User::restored(function ($user) {
           event(new UserWasRestored($user, auth()->user()));
        });

        // User::deleted(function ($user) {
        //     try {
        //         User::withTrashed()->findOrFail($user->id);
        //         event(new WasDeleted($user, auth()->user(), false));
        //     } catch (ModelNotFoundException $e) {
        //         // or was destroyed...
        //         event(new WasDeleted($user, auth()->user(), true));
        //     }
        // });
    }
}
