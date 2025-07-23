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

class ListingCoverTest extends TestCase
{
    /** @test */

    use DatabaseMigrations;

    public function test_the_component_can_render(){
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

        $component = Livewire::test(ListingCover::class)
                        ->set('photo_path', 'storage/product_img/banana.png');

        $component->assertSee('storage/product_img/banana.png', false);

        $listing = Listing::factory()->create([
            'user_id' => $user->id,
            'product_id' => $product->id,
        ]);

        $particularListing = $listing->where('user_id', $user->id)->where('product_id', $product->id)->first();

        $data = [
            'name' => 'banana',
            'image' => 'storage/product_img/banana.png',
            'brand' => 'dole',
            'price' => 100,
            'description' => 'とてもおいしいです',
            'condition' => '良好',
            'user_id' => $user->id,
            'product_id' => $particularListing->product_id,
        ];

        $response = $this->post('/sell', $data);

        $this->assertDatabaseHas('products', [
            'name' => 'banana',
            'image' => 'storage/product_img/banana.png',
            'brand' => 'dole',
            'price' => 100,
            'description' => 'とてもおいしいです',
            'condition' => '良好',
        ]);

        $this->assertDatabaseHas('listings', [
            'user_id' => $user->id,
            'product_id' => $product->id,
        ]);

    }

    public function test_login_user_can_see_the_cover(){
        $user = User::factory()->create();
        $this->actingAs($user);

        $this->get('/sell')->assertSeeLivewire('listing-cover');
        

    }
}
