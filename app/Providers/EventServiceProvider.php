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
        Events\User\Created::class => [
            //
        ],

        Events\User\Deleted::class => [
            //
        ],

        Events\User\Restored::class => [
            //
        ],

        Events\User\Impersonated::class => [
            //
        ],

        Events\User\Registered::class => [
            Listeners\HandleUserWasRegistered::class,
        ],

        Events\User\Confirmed::class => [
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
