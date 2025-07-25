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

        $path_parameter = [
            'item_id' => $product->id,
        ];

        $response = $this->get(route('item.detail', $path_parameter));

        $data = [
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'content' => 'とてもおいしいです',
        ];

        $response = $this->post(route('comment', $path_parameter), $data);

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

        $path_parameter = [
            'item_id' => $product->id,
        ];

        $response = $this->get(route('item.detail', $path_parameter));

        $data = [
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'content' => 'とてもおいしいです',
        ];

        $response = $this->post(route('comment', $path_parameter), $data);
        $this->assertEquals(Comment::where('product_id', $product->id)->count(), 0); 
        $response->assertRedirect('/login');
    }

    public function test_login_user_register_comments_without_content(){
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
            'user_id' => Auth::id(),
            'product_id' => $product->id,
        ];

        $path_parameter = [
            'item_id' => $product->id,
        ];

        $response = $this->post(route('comment', $path_parameter), $data);
        $response->assertValid('商品コメントを入力してください');
    }

    public function test_login_user_register_comments_with_over_255_character(){
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
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'content' => '山路を登りながら、こう考えた。智に働けば角が立つ。情に棹させば流される。意地を通せば窮屈だ。とかくに人の世は住みにくい。住みにくさが高じると、安い所へ引き越したくなる。どこへ越しても住みにくいと悟ったとき、詩が生れて、画が出来る。人の世を作ったものは神でもなければ鬼でもない。やはり向う三軒両隣りにちらちらするただの人である。ただの人が作った人の世が住みにくいからとて、越す国はあるまい。あれば人でなしの国へ行くばかりだ。人でなしの国は人の世よりもなお住みにくかろう。越す事のならぬ世が住みにくければ、住みにくい所をどれほどか、寛容て、束の間の命を、束の間でも住みよくせねばならぬ。'
        ];

        $path_parameter = [
            'item_id' => $product->id,
        ];

        $response = $this->post(route('comment', $path_parameter), $data);
        $response->assertValid('255文字以下で入力してください');
    }
}
