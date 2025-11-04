<?php

namespace App\Mail\Contacts;

use App\Domain\Contacts\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactThankYouMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Contact $contact
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Obrigado pelo seu contacto - AMSP',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contacts.thank-you',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
