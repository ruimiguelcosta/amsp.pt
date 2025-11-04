<?php

namespace App\Jobs\Contacts;

use App\Domain\Contacts\Models\Contact;
use App\Mail\Contacts\ContactThankYouMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SendContactThankYouEmail implements ShouldQueue
{
    use Queueable;

    public function __construct(
        public Contact $contact
    ) {}

    public function handle(): void
    {
        Mail::to($this->contact->email)->send(new ContactThankYouMail($this->contact));
    }
}
