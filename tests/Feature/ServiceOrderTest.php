<?php

use App\Models\User;
use App\Models\ServiceOrder;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('deu certo o teste da ordem de serviço', function () {
    $user = User::factory()->create(['name' => 'Test User']);

    $payload = [
        'vehiclePlate' => 'ABC1234',
        'entryDateTime' => now()->toDateTimeString(),
        'exitDateTime' => now()->addHours(2)->toDateTimeString(),
        'priceType' => 'Per Hour',
        'price' => 50.00,
        'userId' => $user->id,
    ];

    $response = $this->postJson('/api/service-orders', $payload);

    $response->assertStatus(200)
             ->assertJsonStructure(['message', 'data' => ['id', 'vehiclePlate']]);
});

it('fails to create a service order with invalid data', function () {
    $payload = [
        // Faltando 'vehiclePlate' obrigatório
        'entryDateTime' => now()->toDateTimeString(),
        'userId' => 9999, // ID de usuário que não existe
    ];

    $response = $this->postJson('/api/service-orders', $payload);

    $response->assertStatus(422)
             ->assertJsonValidationErrors(['vehiclePlate', 'userId']);
});
