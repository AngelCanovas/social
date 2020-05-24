<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UsersCanRegisterTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @throws \Throwable
     */
    public function user_can_register()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name', 'AngelCanovas')
                ->type('first_name', 'Angel')
                ->type('last_name', 'Canovas')
                ->type('email', 'angel@email.com')
                ->type('password', 'secret')
                ->type('password_confirmation', 'secret')
                ->press('@register-btn')
                ->assertPathIs('/')
                ->assertAuthenticated()
            ;
        });
    }

    /**
     * @test
     * @throws \Throwable
     */
    public function user_cannot_register_with_invalid_information()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name', '')
                ->press('@register-btn')
                ->assertPathIs('/register')
                ->assertPresent('@validation-errors')
            ;
        });
    }
}
