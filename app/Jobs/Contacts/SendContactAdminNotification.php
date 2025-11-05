<?php

namespace App\Jobs\Contacts;

use App\Domain\Contacts\Models\Contact;
use App\Mail\Contacts\ContactAdminNotificationMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendContactAdminNotification implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(
        public int $contactId
    ) {}

    public function handle(): void
    {
        $contact = Contact::query()->findOrFail($this->contactId);

        Mail::to('rui.costa@inovador.net')->send(new ContactAdminNotificationMail($contact));
    }
}
