<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\Product;
use App\Models\Exhibit;
/*
use App\Models\Purchase;  */

class ProfileController extends Controller
{
    //
    public function index(Request $request){
        if($request->page == "buy"){/*
            $purchases = Purchase::where('user_id', Auth::id())->get();
            $purchases_unique_product_id = $purchases->unique('product_id'); */
            $products_unique = [];  /*
            foreach($purchases_unique_product_id as $purchase){
                array_push($products_unique, Product::find($purchase->product_id));
            };  */
            $data = [
                'page' => $request->page,
                'products' => $products_unique,
            ];
        }else{
            $exhibits = Exhibit::where('user_id', Auth::id())->get();
            $exhibits_unique_product_id = $exhibits->unique('product_id');
            $products_unique = [];
            foreach($exhibits_unique_product_id as $exhibit){
                array_push($products_unique, Product::find($exhibit->product_id));
            };
            $data = [
                'page' => $request->page,
                'products' => $products_unique,
            ];
        }
        return view('mypage', $data);
    }

    public function edit(){
        $userInfo = Auth::user();
        $imageFilePath = 'storage/img/' . $userInfo->name . "_image.png";
        $data = [
            'userInfo' => $userInfo,
            'imageFilePath' => $imageFilePath,
        ];
        return view('profile_register', $data);
    }

    public function store(Request $request){
        $profile = $request->all();
        Profile::create($profile);
        return redirect('/login');
    }
}
