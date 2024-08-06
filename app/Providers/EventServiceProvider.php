<?php

namespace App\Providers;

use App\Events\AbstractSubmitted;
use App\Events\ConferenceInscriptionVerified;
use App\Events\InscriptionPayed;
use App\Listeners\SendAbstractRecievedEmail;
use App\Listeners\SendAbstractToAdmistratorEmail;
use App\Listeners\SendConferenceInscriptionConfirmationEmail;
use App\Listeners\SendPaymentToAdministrators;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ConferenceInscriptionVerified::class => [
            SendConferenceInscriptionConfirmationEmail::class
        ],
        AbstractSubmitted::class => [
            SendAbstractRecievedEmail::class
        ],
        InscriptionPayed::class => [
            SendPaymentToAdministrators::class
        ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
