<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\PurchaseCover;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use App\Models\Profile;

class PurchaseCoverTest extends TestCase
{
    /** @test */

    use DatabaseMigrations;


    public function the_component_can_render()
    {
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

        $item_id = $product->id;

        $profile = Profile::factory()->create();

        $data = [
            'product' => $product,
            'post_code' => $profile->post_code,
            'address' => $profile->address,
            'building' => $profile->building,
        ];

        $this->get(route('purchase', $item_id), $data);

        $component = Livewire::test(PurchaseCover::class, ['productId' => $product->id, 'post_code' => $profile->post_code, 'address' => $profile->address, 'building' => $profile->building])
            ->set('paymentMethod', 'コンビニ支払い');
        
        $component->assertSee('コンビニ支払い');

    }
}
