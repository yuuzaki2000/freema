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

    public function test_login_user_can_like_a_post(){
        $user = User::factory()->create();
        $this->actingAs($user);

        $product = Product::factory()->create([
            'name' => 'banana',
            'image' => 'storage/product_img/banana.png',
            'brand' => 'dole',
            'price' => 100,
            'description' => 'とてもおいしいです',
            'condition' => '良好'
        ]);

        $data = [
            'user_id' => Auth::id(),
            'product_id' => $product->id,
        ];

        $item_id = $product->id;

        $this->post(route('favorite', $item_id), $data);
        $this->assertDatabaseHas('favorites', $data);
    }

    public function test_the_favorite_icon_changes_when_he_give_a_like(){
        $user = User::factory()->create();
        $this->actingAs($user);

        $product = Product::factory()->create([
            'name' => 'banana',
            'image' => 'storage/product_img/banana.png',
            'brand' => 'dole',
            'price' => 100,
            'description' => 'とてもおいしいです',
            'condition' => '良好'
        ]);

        $data = [
            'user_id' => Auth::id(),
            'product_id' => $product->id,
        ];

        $item_id = $product->id;

        $response = $this->post(route('favorite', $item_id), $data);
        $response->assertSee('red_star.png');
    }
}
