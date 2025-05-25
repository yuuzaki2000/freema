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
}