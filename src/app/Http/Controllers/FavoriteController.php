<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;


class FavoriteController extends Controller
{
    //
    public function store($product_id){
        $data = [
            'user_id' => Auth::id(),
            'product_id' => $product_id
        ];
        Favorite::create($data);
        $product = Product::find($product_id);
        return view('product_detail', compact('product'));
    }
}
