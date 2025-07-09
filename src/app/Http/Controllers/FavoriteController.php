<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;


class FavoriteController extends Controller
{
    //
    public function store($product_id, Request $request){

        $isPushed = $request->isPushed;

        if($isPushed == false){
            $data = [
                'user_id' => Auth::id(),
                'product_id' => $product_id
            ];
            Favorite::create($data);
            $isPushed = true;
            $imageUrl = 'img/red_star.png';
            return redirect()->route('item.detail', ['product_id' => $product_id, 'isPushed' => $isPushed, 'imageUrl' => $imageUrl]);
        }else{
            $favorite = Favorite::where('user_id', Auth::id())->where('product_id', $product_id)->first();
            $favorite->delete();
            $isPushed = false;
            $imageUrl = 'img/star_icon.png';
            return redirect()->route('item.detail', ['product_id' => $product_id, 'isPushed' => $isPushed, 'imageUrl' => $imageUrl]);
        }
    }
}
