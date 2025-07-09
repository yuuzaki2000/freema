<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;


class LogInTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_validate_email_on_login(){

        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        $response = $this->get('/login');
        $response->assertStatus(200);

        $data = [
            'name' => 'Test User',
            'email' => '',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $response = $this->post('/login', $data);
        $response->assertValid('メールアドレスを入力してください');
    }
}
