<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use App\Models\Favorite;
use App\Models\Comment;

class ProductDetailTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    use DatabaseMigrations;

    public function test_details_of_product_are_displayed(){
        $product = Product::factory()->create([
            'name' => 'banana',
            'image' => 'storage/product_img/banana.png',
            'brand' => 'dole',
            'price' => 100,
            'description' => 'とてもおいしいです',
            'condition' => '良好'
        ]);

        $data = [
            'item_id' => $product->id,
        ];

        $response = $this->get(route('item.detail', $data));

        $imagePath = asset($product->image);
        $favorites = Favorite::where('product_id', $product->id)->get();
        $comments = Comment::where('product_id', $product->id)->get();

        $response->assertSee($imagePath);
        $response->assertSee($product->name);
        $response->assertSee($product->brand);
        $response->assertSee($product->price);
        $response->assertSee($favorites->count());
        $response->assertSee($comments->count());
        $response->assertSee($product->description);
    }
}
