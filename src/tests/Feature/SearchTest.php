<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class SearchTest extends TestCase
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

    public function test_partial_search(){
        $product = Product::factory()->create([
            'name' => 'banana',
            'image' => 'storage/product_img/banana.png',
        ]);

        $products = Product::all();

        $data = [
            'products' => $products,
            'keyword' => "ban",
            'page' => "",
        ];

        $response = $this->post('/search', $data);
        $response->assertSee($product->image);
    }

    public function test_mylist_has_the_same_search_condition(){
        $product = Product::factory()->create([
            'name' => 'banana',
            'image' => 'storage/product_img/banana.png',
        ]);

        $products = Product::all();

        $data = [
            'products' => $products,
            'keyword' => "ban",
            'page' => "",
        ];

        $response = $this->post('/search', $data);
        $response->assertSee($product->image);

        $response = $this->get('/', [
            'page' => 'mylist',
        ]);
        
        
        
    }
}
