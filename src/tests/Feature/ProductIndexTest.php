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


    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function test_all_products_are_showed_on_index(){

        $firstProduct = Product::factory()->create([
            'image' => 'storage/product_img/banana.png',
        ]);
        $secondProduct = Product::factory()->create();
        $thirdProduct = Product::factory()->create();

        $response = $this->get('/');
        $response->assertSee($firstProduct->image);
        $response->assertSee($secondProduct->image);
        $response->assertSee($thirdProduct->image);
    }

    public function test_sold_in_purchase_product(){

        $firstProduct = Product::factory()->create();

        $user = User::factory()->create();
        $this->actingAs($user);

        $purchase = Purchase::factory()->create();

        $product = Product::find($purchase->product_id);

        $response = $this->get('/');
        $response->assertSeeText('Sold');
    }

    public function test_my_own_listing_product_is_not_showed(){
        $firstProduct = Product::factory()->create();

        $user = User::factory()->create();
        $this->actingAs($user);
        $listing = Listing::factory()->create();
        $product = Product::find($listing->product_id);
        $response = $this->get('/');
        !$response->assertSee($product->image);
    }
}
