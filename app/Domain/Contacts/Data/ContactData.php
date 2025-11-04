<?php

namespace App\Domain\Contacts\Data;

class ContactData
{
    public function __construct(
        public string $name,
        public string $email,
        public string $phone,
        public string $message,
    ) {}

    public static function from(array $data): self
    {
        return new self(
            name: $data['name'],
            email: $data['email'],
            phone: $data['phone'],
            message: $data['message'],
        );
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ];
    }
}
