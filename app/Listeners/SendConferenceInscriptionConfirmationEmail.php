<?php
namespace App\Listeners;

use App\Events\ConferenceInscriptionVerified;
use App\Mail\ConferenceInscriptionConfirmed;
use Illuminate\Support\Facades\Mail;

class SendConferenceInscriptionConfirmationEmail
{
    /**
     * Handle the event.
     */
    public function handle(ConferenceInscriptionVerified $event): void
    {
        Mail::to($event->user)->send(new ConferenceInscriptionConfirmed($event->user, $event->password));
    }
}
