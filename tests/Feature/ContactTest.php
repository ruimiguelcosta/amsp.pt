<?php

namespace Tests\Feature;

use App\Domain\Contacts\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Queue;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    public function test_stores_contact_successfully(): void
    {
        Queue::fake();

        $payload = [
            'name' => 'João Silva',
            'email' => 'joao@example.com',
            'phone' => '+351 926 289 876',
            'message' => 'Gostaria de saber mais sobre a vossa solução.',
        ];

        $response = $this->postJson('/contact', $payload);

        $response->assertStatus(201)
            ->assertJson([
                'message' => 'Mensagem enviada com sucesso. Entraremos em contacto em breve.',
            ]);

        $this->assertDatabaseHas('contacts', [
            'email' => 'joao@example.com',
            'name' => 'João Silva',
            'phone' => '+351 926 289 876',
            'message' => 'Gostaria de saber mais sobre a vossa solução.',
        ]);
    }

    public function test_validates_required_fields(): void
    {
        $response = $this->postJson('/contact', []);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['name', 'email', 'phone', 'message']);
    }

    public function test_validates_email_format(): void
    {
        $payload = [
            'name' => 'João Silva',
            'email' => 'invalid-email',
            'phone' => '+351 926 289 876',
            'message' => 'Mensagem de teste.',
        ];

        $response = $this->postJson('/contact', $payload);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['email']);
    }

    public function test_dispatches_email_jobs_after_storing_contact(): void
    {
        Queue::fake();

        $payload = [
            'name' => 'Maria Santos',
            'email' => 'maria@example.com',
            'phone' => '+351 21 145 1873',
            'message' => 'Quero agendar uma demonstração.',
        ];

        $this->postJson('/contact', $payload);

        Queue::assertPushed(\App\Jobs\Contacts\SendContactThankYouEmail::class);
        Queue::assertPushed(\App\Jobs\Contacts\SendContactAdminNotification::class);
    }
}