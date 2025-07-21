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

        if(empty($profile)){
            $data = [
            'userId' => $userId,
            'profileId' => null,
            ];

        }else{
            $data = [
            'userId' => $userId,
            'profileId' => $profile->id,
            ];
        }
        
        return view('profile_update', $data);
    }

    public function store(Request $request){
        /*
        $dir = 'profile_img';
        $file_name = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('public/' . $dir, $file_name);  */

        $profile = new Profile();
        $profile->image = $request->image;
        $profile->user_id = $request->user_id;
        $profile->post_code = $request->post_code;
        $profile->address = $request->address;
        $profile->building = $request->building;
        $profile->save();

        return redirect('/login');
    }

    public function update(Request $request){
        $profile = Profile::where('user_id', $request->user_id)->first();
        $profile->update($request->all());
        return redirect('/mypage');
    }

    public function getAddressChangeView($item_id){
        $product = Product::find($item_id);
        $profile = Profile::where('user_id', Auth::id())->first();
        $data = [
            'product' => $product,
            'post_code' => $profile->post_code,
            'address' => $profile->address,
            'building' => $profile->building,
        ];

        return view('address_change', $data);
    }

    public function sendAddress(Request $request, $item_id){
        $product = Product::find($item_id);
        $data = [
            'product' => $product,
            'post_code' => $request->post_code,
            'address' => $request->address,
            'building' => $request->building,
        ];
        return view('purchase', $data);
    }
}
