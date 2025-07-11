<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;


class LogoutTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use DatabaseMigrations;

    
    public function test_user_can_logout(){
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post('/logout');
        $this->assertGuest();

    }
}
