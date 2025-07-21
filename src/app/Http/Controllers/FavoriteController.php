<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Listing;


class FavoriteController extends Controller
{
    //
    public function store($product_id, Request $request){
        $particularListing = Listing::where('product_id', $product_id)->first();
        $listingUserId = $particularListing->user_id;

        if($listingUserId !== Auth::id()){
            $particularFavorite = Favorite::where('user_id', Auth::id())->where('product_id', $product_id)->first();
            $particularFavorites = Favorite::where('user_id', Auth::id())->where('product_id', $product_id)->get();
            if($particularFavorites->count() == 0){
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
                    $isPushed = false;
                    $imageUrl = 'img/star_icon.png';
                    return redirect()->route('item.detail', ['product_id' => $product_id, 'isPushed' => $isPushed, 'imageUrl' => $imageUrl]);    
                }
            }else{
                $isPushed = $request->isPushed;

                if($isPushed == false){ 
                    $imageUrl = 'img/red_star.png';
                    return redirect()->route('item.detail', ['product_id' => $product_id, 'isPushed' => $isPushed, 'imageUrl' => $imageUrl]);
                }else{
                    $particularFavorite->delete();
                    $isPushed = false;
                    $imageUrl = 'img/star_icon.png';
                    return redirect()->route('item.detail', ['product_id' => $product_id, 'isPushed' => $isPushed, 'imageUrl' => $imageUrl]);    
                }
            }
        }
    }
}
