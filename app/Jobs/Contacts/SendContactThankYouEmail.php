<?php

namespace App\Jobs\Contacts;

use App\Domain\Contacts\Models\Contact;
use App\Mail\Contacts\ContactThankYouMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendContactThankYouEmail implements ShouldQueue
{
    use Queueable, SerializesModels;

    public string $connection = 'redis';

    public function __construct(
        public int $contactId
    ) {}

    public function handle(): void
    {
        $contact = Contact::query()->findOrFail($this->contactId);

        Mail::to($contact->email)->send(new ContactThankYouMail($contact));
    }
}
