<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Laravel\Fortify\FortifyServiceProvider;
use App\Models\User;

class RegistrationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use DatabaseMigrations;

    public function test_validate_name_on_registration(){
        $response = $this->get('/register');
        $response->assertStatus(200);

        $data = [
            'name' => '',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $response = $this->post('/register', $data);
        
        $response->assertValid('お名前を入力してください');
    }

    public function test_validate_email_on_registration(){
        $response = $this->get('/register');
        $response->assertStatus(200);

        $data = [
            'name' => 'Test User',
            'email' => '',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $response = $this->post('/register', $data);

        $response->assertValid('メールアドレスを入力してください');
    }

    public function test_validate_password_on_registration(){
        $response = $this->get('/register');
        $response->assertStatus(200);

        $data = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '',
            'password_confirmation' => 'password',
        ];
        
        $response = $this->post('/register', $data);

        $response->assertValid('パスワードを入力してください');
    }

    public function test_validate_password_count_on_registration(){
        $response = $this->get('/register');
        $response->assertStatus(200);

        $data = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'passwrd',
            'password_confirmation' => 'passwrd',
        ];

        $response = $this->post('/register', $data);

        $response->assertValid('パスワードは8文字以上で入力してください');
    }

    public function test_password_is_not_correspond_with_password_confirmation_on_registration(){
        $response = $this->get('/register');
        $response->assertStatus(200);

        $data = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'passwerd',
            'password_confirmation' => 'password',
        ];

        $response = $this->post('/register', $data);

        $response->assertValid('パスワードと一致しません');
    }

    public function test_new_user_can_register(){
        $response = $this->get('/register');
        $response->assertStatus(200);

        $data = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $this->post('/register', $data);

        $this->assertAuthenticated();
    }
}