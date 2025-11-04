<?php

namespace App\Domain\Contacts\Services;

use App\Domain\Contacts\Data\ContactData;
use App\Domain\Contacts\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactService
{
    public function store(ContactData $data): Contact
    {
        return DB::transaction(function () use ($data) {
            return Contact::query()->create($data->toArray());
        });
    }
}
