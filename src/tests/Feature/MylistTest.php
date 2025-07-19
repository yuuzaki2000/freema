<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use App\Models\Favorite;
use App\Models\Purchase;
use App\Models\Listing;


class MylistTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    use DatabaseMigrations;

    public function test_only_favorite_products_are_showed_on_mylist(){
        $user = User::factory()->create();
        $this->actingAs($user);
        
        $product = Product::factory()->create([
            'image' => 'storage/product_img/banana.png',
        ]);
        $productImageUrl = asset($product->image);
        $favorite = Favorite::factory()->create([
            'user_id' => $user->id,
            'product_id' => $product->id
        ]);

        $response = $this->get('/', [
            'page' => 'mylist',
        ]);
        $response->assertSee($productImageUrl, false);
    }

    public function test_purchase_products_are_sold_on_mylist(){
        $user = User::factory()->create();
        $this->actingAs($user);

        $product = Product::factory()->create([
            'image' => 'storage/product_img/banana.png',
        ]);

        $purchase = Purchase::factory()->create([
            'user_id' => $user->id,
            'product_id' => $product->id
        ]);

        $response = $this->get('/', [
            'page' => 'mylist',
        ]);

        $response->assertSeeText('Sold');
    }

    public function test_my_own_listings_are_not_shown_on_mylist(){
        $user = User::factory()->create();
        $this->actingAs($user);

        $product = Product::factory()->create([
            'image' => 'storage/product_img/banana.png',
        ]);
        $productImageUrl = asset($product->image);
        $listing = Listing::factory()->create([
            'user_id' => $user->id,
            'product_id' => $product->id,
        ]);

        $response = $this->get('/', [
            'page' => 'mylist',
        ]);
        !$response->assertSee($productImageUrl);
    }

    public function test_user_who_is_not_verified_cant_show_any_products(){
        $user = User::factory()->create([
            'email_verified_at' => null,
        ]);
        $this->actingAs($user);

        $product = Product::factory()->create([
            'image' => 'storage/product_img/banana.png',
        ]);
        $productImageUrl = asset($product->image);

        $favorite = Favorite::factory()->create([
            'user_id' => $user->id,
            'product_id' => $product->id
        ]);

        $response = $this->get('/', [
            'page' => 'mylist',
        ]);
        !$response->assertSee($productImageUrl);
        
    }
}
