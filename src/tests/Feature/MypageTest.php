<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Profile;
use App\Models\Product;
use App\Models\Listing;
use App\Models\Purchase;


class MypageTest extends TestCase
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

    public function test_get_mypage(){
        $user = User::factory()->create();
        $this->actingAs($user);

        $profile = Profile::factory()->create([
            'user_id' => $user->id,
        ]);

        $response = $this->get('/mypage');

        $response->assertSee(asset($profile->image), false);
        $response->assertSee($user->name, false);

        $first_product = Product::factory()->create([
            'name' => 'banana',
            'image' => 'storage/product_img/banana.png',
            'brand' => 'dole',
            'price' => 100,
            'description' => 'とてもおいしいです',
            'condition' => '良好'
        ]);

        $first_listing = Listing::factory()->create([
            'user_id' => $user->id,
            'product_id' => $first_product->id
        ]);

        $data = [
            'products' => [$first_product],
            'page' => 'sell',
            'user' => $user,
            'profile' => $profile,
        ];

        $response = $this->get(route('mypage'), $data);
        $response->assertSee(asset($first_product->image), false);

    }
}
