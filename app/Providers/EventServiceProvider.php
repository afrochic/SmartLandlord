<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
<<<<<<< HEAD
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
=======
>>>>>>> 536063ca2aa1cd12ad3bc18c1bf0354cbaff6c87
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
<<<<<<< HEAD
        Registered::class => [
            SendEmailVerificationNotification::class,
=======
        'App\Events\Event' => [
            'App\Listeners\EventListener',
>>>>>>> 536063ca2aa1cd12ad3bc18c1bf0354cbaff6c87
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
