<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Laravel\Fortify\FortifyServiceProvider;

class RegistrationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'hanako',
            'email' => 'hanako0813@gmail.com',
            'password' => bcrypt('hanako0813'),
            'password_confirmation' => bcrypt('hanako0813'),
        ]);

        $this->assertAuthenticated();
    }
}