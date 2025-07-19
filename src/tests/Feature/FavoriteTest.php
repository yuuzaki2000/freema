<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class FavoriteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    use DatabaseMigrations;

    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_login_user_can_favorite_a_reply(){
        $user = User::factory()->create();
        $this->actingAs($user);

        $product = Product::factory()->create([
            'image' => 'storage/product_img/banana.png',
        ]);

        $data = [
            'user_id' => Auth::id(),
            'product_id' => $product->id,
        ];

        $response = $this->post('/favorite/{product_id}', $data);

    }
}
