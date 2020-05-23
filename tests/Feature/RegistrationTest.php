<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function users_can_register()
    {
        $userData = [
            'name' => 'Angel',
            'first_name' => 'C',
            'last_name' => 'M',
            'email' => 'angel@email.com',
            'password' => 'secret',
            'password_confirmation' => 'secret',
        ];

        $response = $this->post(route('register'), $userData);

        $response->assertRedirect('/');

        $this->assertDatabaseHas('users', [
            'name' => 'Angel',
            'first_name' => 'C',
            'last_name' => 'M',
            'email' => 'angel@email.com',
        ]);

        $this->assertTrue(
            Hash::check('secret', User::first()->password),
            'The password need to be hashed'
        );
    }
}
