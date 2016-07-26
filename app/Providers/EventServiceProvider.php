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
        Events\Creation\UserCreated::class => [
            //
        ],

        Events\Deletion\UserDeleted::class => [
            //
        ],

        Events\Restoration\UserRestored::class => [
            //
        ],

        Events\Registration\UserRegistered::class => [
            Listeners\Registration\SendNotificationToAdminEmailMayBe::class,
            Listeners\SendConfirmationToEmail::class,
        ],

        Events\Confirmation\UserConfirmRegistration::class => [
            Listeners\Confirmation\SendWelcomeToEmail::class,
        ],

        Events\Impersonation\UserImpersonated::class => [
            //
        ],

        //

    ];

    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    protected $subscribe = [
        Listeners\UserEventListener::class,
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
