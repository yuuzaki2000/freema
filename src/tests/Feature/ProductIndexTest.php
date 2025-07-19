<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class ProductIndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    use DatabaseMigrations;

    public function test_all_products_are_showed_on_index(){

        $firstProduct = Product::factory()->create([
            'image' => 'storage/product_img/vacuum_cleaner.png',
        ]);
        $firstProductImageUrl = asset($firstProduct->image);
        $secondProduct = Product::factory()->create([
            'image' => 'storage/product_img/golf_bag.png'
        ]);
        $secondProductImageUrl = asset($secondProduct->image);
        $thirdProduct = Product::factory()->create([
            'image' => 'storage/product_img/coffee_cup.jpg'
        ]);
        $thirdProductImageUrl = asset($thirdProduct->image);


        $response = $this->get('/');
        $response->assertSee($firstProductImageUrl, false);
        $response->assertSee($secondProductImageUrl, false);
        $response->assertSee($thirdProductImageUrl, false);
    }

    public function test_sold_in_purchase_product(){

        $user = User::factory()->create();
        $this->actingAs($user);

        $product = Product::factory()->create([
            'image' => 'storage/product_img/banana.png',
        ]);
        $purchase = Purchase::factory()->create([
            'user_id' => $user->id,
            'product_id' => $product->id,
        ]);

        $purchase_product = Product::find($purchase->product_id);
        $response = $this->get('/');
        $response->assertSeeText('Sold');
    }

    public function test_my_own_listing_product_is_not_showed(){
       
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

        $response = $this->get('/');
        !$response->assertSee($productImageUrl);
    }
}
