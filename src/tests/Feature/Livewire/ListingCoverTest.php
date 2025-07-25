<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ListingCover;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use App\Models\Listing;
use App\Models\Category;

class ListingCoverTest extends TestCase
{
    /** @test */

    use DatabaseMigrations;

    public function test_the_component_can_render(){
        $user = User::factory()->create();
        $this->actingAs($user);

        $product = Product::factory()->create([
            'name' => 'banana',
            'price' => 100,
            'description' => 'とてもおいしいです',
            'condition' => '良好'
        ]);

        $first_category = Category::factory()->create([
            'id' => 1,
            'content' => 'ファッション',
        ]);

        $second_category = Category::factory()->create([
            'id' => 2,
            'content' => '家電',
        ]);

        $component = Livewire::test(ListingCover::class);

        $product_data = [
            'name' => $product->name,
            'price' => $product->price,
            'description' => $product->description,
            'condition' => $product->condition,
        ];

        $category_data = [
            'category' => $first_category->content,
        ];

        $data = array($product_data, $category_data);

        $product->categories()->sync(1);

        $response = $this->post('/sell', $data);

        $this->assertDatabaseHas('products', $product_data);
        $this->assertDatabaseHas('categories', $category_data);
    }
}
