<?php

namespace App\Listeners;

use App\Events\AbstractSubmitted;
use App\Mail\AbstractRecieved;
use App\Mail\Admin_AbstractCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendAbstractToAdmistratorEmail
{
    /**
     * Handle the event.
     */
    public function handle(AbstractSubmitted $event): void
    {
        Mail::to(config('mail.administrator'))->send(new Admin_AbstractCreated($event->abstract));
    }
}
