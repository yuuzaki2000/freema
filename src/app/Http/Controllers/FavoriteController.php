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
    public function store($item_id, Request $request){
        $particularListing = Listing::where('product_id', $item_id)->first();
        if($particularListing !== null){
            $listingUserId = $particularListing->user_id;
        }else{
            $listingUserId = null;
        }

        if($listingUserId !== Auth::id()){
            $particularFavorite = Favorite::where('user_id', Auth::id())->where('product_id', $item_id)->first();

            if(empty($particularFavorite)){
                    $data = [
                        'user_id' => Auth::id(),
                        'product_id' => $item_id,
                    ];
                    Favorite::create($data);
                    $imageUrl = 'img/red_star.png';
                    return redirect()->route('item.detail', ['item_id' => $item_id, 'imageUrl' => $imageUrl]);
            }else{
                $particularFavorite->delete();
                $imageUrl = 'img/white_star.png';
                return redirect()->route('item.detail', ['item_id' => $item_id, 'imageUrl' => $imageUrl]);
            }
        }else{
            $imageUrl = 'img/white_star.png';
            return redirect()->route('item.detail', ['item_id' => $item_id, 'imageUrl' => $imageUrl]);
        }
    }
}
