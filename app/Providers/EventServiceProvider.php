<?php

namespace App\Providers;

use App\Events as E;
use App\Listeners as L;
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
        // \Illuminate\Auth\Events\Login::class => [
        //     Listeners\Login\UpdateSigninable::class,
        //     Listeners\Login\NotificationOnEmail::class,
        // ],
        // \Illuminate\Auth\Events\Failed::class => [
        //     Listeners\Login\UpdateFailedAttempts::class,
        // ],

        E\User\WasCreated::class => [
            L\SendResetLinkEmail::class,
        ],

        E\User\WasRegistered::class => [
            //
        ],
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
