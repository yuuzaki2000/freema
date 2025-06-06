<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Listing;
use App\Models\User;

class ProductController extends Controller
{
    //
    public function index() {
        $listings = Listing::where('user_id', Auth::id())->get();
        $products = Product::all();
        foreach($listings as $listing){
            if($listing->product_id != null){
                $products->find($listing->product_id)->delete();
            }
        }
        /*  where('user_id', '!=', Auth::id()) */
        return view('index', compact('products'));
    }

    public function add(){
        $userId = Auth::id();
        $productNextId = DB::table('products')->max('id') + 1;
        $imageFilePath = 'storage/product_img/product_' . $productNextId . ".png";
        $data = [
            'userId' => $userId,
            'imageFilePath' => $imageFilePath,
        ];
        return view('listing', $data);
    }

    public function store(Request $request){
        try{
            $product = new Product();
            $product->name = $request->name;
            $product->image = $request->image;
            $product->brand = $request->brand;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->condition = $request->condition;
            $product->save();

            $productId = $product->id;

            $listing = new Listing();
            $listing->user_id = Auth::id();
            $listing->product_id = $productId;
            $listing->save();

        }catch(Exception $e){
            echo $e->getMessage();
        }
        return redirect('/');
    }

    public function search(Request $request){
        $products = Product::where('name', 'like', "%{$request->keyword}%")->get();
        return view('index', compact('products'));
    }

    public function getDetail($product_id){
        $product = Product::find($product_id);
        return view('product_detail', compact('product'));
    }

    public function purchase($product_id){
        $userId = Auth::id();
        $product = Product::find($product_id);
        return view('purchase', compact('product', 'userId'));
    }
}
