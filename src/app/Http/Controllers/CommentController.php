<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    //
    public function store(CommentRequest $request, $product_id){
        $data = [
            'user_id' => Auth::id(),
            'product_id' => $product_id,
            'content' => $request->content,
        ];
        Comment::create($data);
        $product = Product::find($product_id);
        return redirect()->route('item.detail', ['product_id' => $product_id]);
    }
}
