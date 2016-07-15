<?php

namespace App\Providers;

use App\Events;
use App\Listeners;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Events\User\WasCreated::class => [
            //
        ],

        Events\User\WasDeleted::class => [
            //
        ],

        Events\User\WasRestored::class => [
            //
        ],

        Events\User\Impersonated::class => [
            //
        ],

        Events\User\WasRegistered::class => [
            Listeners\HandleUserWasRegistered::class,
        ],

        Events\User\WasConfirmed::class => [
            //
        ],

        \Illuminate\Auth\Events\Login::class => [
            Listeners\HandleUserWasLogin::class,
        ],

        \Illuminate\Auth\Events\Failed::class => [
            Listeners\HandleUserWasFailed::class,
        ],


        //

    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
