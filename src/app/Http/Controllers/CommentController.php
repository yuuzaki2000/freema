<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;
use App\Models\Trade;
use App\Models\Message;

class CommentController extends Controller
{
    //
    public function store(CommentRequest $request, $item_id){
        $data = [
            'user_id' => Auth::id(),
            'product_id' => $item_id,
            'content' => $request->content,
        ];
        Comment::create($data);
        $product = Product::find($item_id);

        Trade::create([
            'product_id' =>$item_id,
            'buyer_id' => Auth::id(),
            'seller_id' => $product->listing->user_id,
            'status' => 'negotiating',
        ]);

        Message::create([
            'trade_id' => $product->trade->id,
            'user_id' => Auth::id(),
            'content' => $request->content,
            'image' => null,
        ]);

        return redirect()->route('item.detail', ['item_id' => $item_id]);
    }
}
