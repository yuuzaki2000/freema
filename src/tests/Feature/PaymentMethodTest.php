<?php

namespace Tests\Feature\Livewire;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use Livewire\Livewire;


class PaymentMethodTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use DatabaseMigrations;

    public function test_immediate_reflection(){
        $user = User::factory()->create();
        $this->actingAs($user);

        $product = Product::factory()->create([
            'image' => 'storage/product_img/golf_bag.png'
        ]);

        $data = [
            'product_id' => $product->id,
        ];


    }
}
