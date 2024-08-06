<?php

namespace App\Listeners;

use App\Events\InscriptionPayed;
use App\Mail\PaymentSubmittedEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendPaymentToAdministrators
{
    /**
     * Handle the event.
     */
    public function handle(InscriptionPayed $event): void
    {
        $smnAdmin = 'smneurologie.contact@gmail.com';
        $paymentServiceAdmin = 'taha.benali@moderntravel.ma';

        $payment = $event->payment;

        Mail::to($smnAdmin)->bcc($paymentServiceAdmin)->send(new PaymentSubmittedEmail($payment));
    }
}
