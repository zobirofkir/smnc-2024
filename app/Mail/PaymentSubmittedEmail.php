<?php

namespace App\Mail;

use App\Models\Payment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PaymentSubmittedEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public readonly Payment $payment)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $first_name = $this->payment->conferenceInscription->first_name;
        $last_name = $this->payment->conferenceInscription->last_name;
        return new Envelope(
            subject: 'Paiement Information de ' . $last_name . ' ' . $first_name,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.inscription-payment',
            with: [
                'first_name' => $this->payment->conferenceInscription->first_name,
                'last_name' => $this->payment->conferenceInscription->last_name,
                'info' => $this->payment->info,
                'methode' => $this->payment->payed_by,
                'total' => $this->payment->total
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath(public_path('payments') . '/' . $this->payment->bank_transfer),
        ];
    }
}
