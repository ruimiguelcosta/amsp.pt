<?php

namespace App\Actions\Http\Contacts;

use App\Domain\Contacts\Data\ContactData;
use App\Domain\Contacts\Services\ContactService;
use App\Http\Requests\Contacts\StoreContactRequest;
use App\Jobs\Contacts\SendContactAdminNotification;
use App\Jobs\Contacts\SendContactThankYouEmail;
use Illuminate\Http\JsonResponse;

class StoreContactAction
{
    public function __construct(
        private ContactService $service
    ) {}

    public function __invoke(StoreContactRequest $request): JsonResponse
    {
        $data = ContactData::from($request->validated());
        $contact = $this->service->store($data);

        SendContactThankYouEmail::dispatch($contact->id);
        SendContactAdminNotification::dispatch($contact->id);

        return response()->json([
            'message' => 'Mensagem enviada com sucesso. Entraremos em contacto em breve.',
        ], 201);
    }
}
