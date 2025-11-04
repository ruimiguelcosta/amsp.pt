<?php

namespace App\Mail\Contacts;

use App\Domain\Contacts\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactAdminNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Contact $contact
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Novo contacto recebido - AMSP',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contacts.admin-notification',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
