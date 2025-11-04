<?php

namespace App\Jobs\Contacts;

use App\Domain\Contacts\Models\Contact;
use App\Mail\Contacts\ContactAdminNotificationMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SendContactAdminNotification implements ShouldQueue
{
    use Queueable;

    public function __construct(
        public Contact $contact
    ) {}

    public function handle(): void
    {
        Mail::to('geral@amsp.pt')->send(new ContactAdminNotificationMail($this->contact));
    }
}
