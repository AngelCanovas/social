<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateStatusTest extends TestCase
{
    /** @test */
    public function a_user_can_create_statuses()
    {
        // 1. Given => Teniendo un usuario autenticado
        // Creamos datos de prueba usando la factoria UserFactory que usa la libreria Faker
        $user = factory(User::class)->create();
        $this->actingAs($user);

        // 2. When => Cuando hace un post request status. Url de la ruta + informacion a enviar
        $this->post(route('status.store'),['body' => 'Mi primer status']);

        // 3. Then => Entonces veo un nuevo estado en la base de datos
        $this->assertDatabaseHas('statuses',[
           'body' => 'Mi primer status'
        ]);

    }
}
