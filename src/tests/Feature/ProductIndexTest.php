<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;


class ProductIndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    use RefreshDatabase;


    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_all_showed(){

        $firstProduct = Product::factory()->create();
        $secondProduct = Product::factory()->create();
        $thirdProduct = Product::factory()->create();

        $response = $this->get('/');
        $response->assertSee($firstProduct->image);
        $response->assertSee($secondProduct->image);
        $response->assertSee($thirdProduct->image);
    }
}
