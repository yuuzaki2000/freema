<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;


    public function testHello()
    {
        $this->assertTrue(true);

        $this->assertGuest();

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->post('/register', [
            'name' => '',
            'email' => 'hanako0813@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);
        
        $response->assertValid('お名前を入力してください');

        $user = User::factory()->create();
        $this->actingAs($user);

        $this->assertAuthenticated();
    }
}
