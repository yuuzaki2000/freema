<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\Product;
use App\Models\Listing;
use App\Models\Purchase;

class ProfileController extends Controller
{
    //
    public function index(Request $request){
        if($request->page == "buy"){
            $purchases = Purchase::where('user_id', Auth::id())->get();
            $purchases_unique_product_id = $purchases->unique('product_id');
            $products_unique = [];
            foreach($purchases_unique_product_id as $purchase){
                array_push($products_unique, Product::find($purchase->product_id));
            };
            $data = [
                'page' => $request->page,
                'products' => $products_unique,
            ];
        }else{
            $listings = Listing::where('user_id', Auth::id())->get();
            $listings_unique_product_id = $listings->unique('product_id');
            $products_unique = [];
            foreach($listings_unique_product_id as $listing){
                array_push($products_unique, Product::find($listing->product_id));
            };
            $data = [
                'page' => $request->page,
                'products' => $products_unique,
            ];
        }
        return view('mypage', $data);
    }

    public function configure(){
        $userInfo = Auth::user();
        $imageFilePath = 'storage/profile_img/' . $userInfo->name . "_image.png";
        $profile = Profile::where('user_id', Auth::id())->first();

        $data = [
            'userInfo' => $userInfo,
            'imageFilePath' => $imageFilePath,
            'profile' => $profile,
        ];
        return view('profile_update', $data);
    }

    /*
    public function configure(){
        $userInfo = Auth::user();
        $profile = Profile::where('user_id', $userInfo->id);
        $data = [
            'userInfo' => $userInfo,
            'profile' => $profile,
        ];
        return view('profile_register', $data);
    }  */

    public function store(Request $request){
        $profile = $request->all();
        Profile::create($profile);
        return redirect('/login');
    }

    public function update(Request $request){
        $profile = Profile::where('user_id', $request->user_id)->first();
        $profile->update($request->all());
        return redirect('/mypage');
    }

    public function getAddressChangeView($product_id){
        $product = Product::find($product_id);
        $profile = Profile::where('user_id', Auth::id())->first();
        return view('address_change',compact('product', 'profile'));
    }

    public function updateAddress(Request $request, $product_id){
        $profile = Profile::where('user_id', Auth::id())->first();
        $profile->update($request->all());
        $product = Product::find($product_id);
        return view('purchase', compact('product'));
    }
}
