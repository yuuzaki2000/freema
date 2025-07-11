<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
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

     use DatabaseMigrations;

    
    public function test_validate_email_when_logging_in(){

        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        $response = $this->get('/login');
        $response->assertStatus(200);

        $data = [
            'email' => '',
            'password' => 'password',
        ];

        $response = $this->post('/login', $data);
        $response->assertValid('メールアドレスを入力してください');
    }

    public function test_validate_password_when_logging_in(){

        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        $response = $this->get('/login');
        $response->assertStatus(200);

        $data = [
            'email' => 'test@example.com',
            'password' => '',
        ];

        $response = $this->post('/login', $data);
        $response->assertValid('パスワードを入力してください');
    }

    public function test_input_data_is_wrong(){
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        $response = $this->get('/login');
        $response->assertStatus(200);

        $data = [
            'email' => 'example@example.com',
            'password' => 'password',
        ];

        $response = $this->post('/login', $data);
        $response->assertValid('ログイン情報が登録されていません');
    }

    public function test_user_can_login(){

        $response = $this->get('/login');
        $response->assertStatus(200);

        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        $this->actingAs($user);
    }
}
