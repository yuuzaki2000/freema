<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\Product;
use App\Models\Listing;
use App\Models\Purchase;
use App\Http\Requests\AddressRequest;
use App\Models\User;


class ProfileController extends Controller
{
    //
    public function index(Request $request){
        if($request->page == "buy"){
            $purchases = Purchase::where('user_id', Auth::id())->get();
            $products = collect();
            foreach($purchases as $purchase){
                $product = Product::find($purchase->product_id);
                $products->push($product);
            }
            $page = $request->page;
        }else{
            $listings = Listing::where('user_id', Auth::id())->get();
            $products = collect();
            foreach($listings as $listing){
                $product = Product::find($listing->product_id);
                $products->push($product);
            }
            $page = $request->page;
        }

        $profile = Profile::where('user_id', Auth::id())->first();
        $user = User::find(Auth::id());

        return view('mypage', compact('products', 'page', 'user', 'profile'));
    }

    public function configure(){
        $userId = Auth::id();
        $profile = Profile::where('user_id', Auth::id())->first();

        $data = [
            'userId' => $userId,
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

    public function store(AddressRequest $request){
        $profile = $request->all();
        Profile::create($profile);
        return redirect('/login');
    }

    public function update(AddressRequest $request){
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
