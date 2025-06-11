<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //
    public function store(Request $request, $product_id){
        $data = [
            'user_id' => Auth::id(),
            'product_id' => $product_id,
            'content' => $request->content,
        ];
        Comment::create($data);
        $product = Product::find($product_id);
        return view('product_detail', compact('product'));
    }
}
