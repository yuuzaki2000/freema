<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;


class CommentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use DatabaseMigrations;

    public function test_login_user_can_post_comment() {
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

        $data = [
            'product_id' => $product->id,
        ];

        $response = $this->get(route('item.detail', $data));

        $data = [
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'content' => 'とてもおいしいです',
        ];

        $response = $this->post(route('comment', $data));

        $this->assertDatabaseHas('comments',$data);
    }

    public function test_guest_user_cannot_post_comment(){
        $product = Product::factory()->create([
            'name' => 'banana',
            'image' => 'storage/product_img/banana.png',
            'brand' => 'dole',
            'price' => 100,
            'description' => 'とてもおいしいです',
            'condition' => '良好'
        ]);

        $data = [
            'product_id' => $product->id,
        ];

        $response = $this->get(route('item.detail', $data));

        $data = [
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'content' => 'とてもおいしいです',
        ];

        $response = $this->post(route('comment', $data));
        $this->assertEquals(Comment::where('product_id', $product->id)->count(), 0); 
        $response->assertRedirect('/login');
    }
}
