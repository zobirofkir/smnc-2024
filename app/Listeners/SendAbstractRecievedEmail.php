<?php

namespace App\Listeners;

use App\Events\AbstractSubmitted;
use App\Mail\AbstractRecieved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendAbstractRecievedEmail
{
    /**
     * Handle the event.
     */
    public function handle(AbstractSubmitted $event): void
    {
        Mail::to(auth()->user())->send(new AbstractRecieved(auth()->user(), $event->abstract));
    }
}
