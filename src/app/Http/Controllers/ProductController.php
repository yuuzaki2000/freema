<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Listing;
use App\Models\User;
use App\Models\Profile;
use App\Http\Requests\ExhibitionRequest;
use App\Models\Category;

class ProductController extends Controller
{
    //
    public function index() {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function add(){
        $productNextId = DB::table('products')->max('id') + 1;
        $imageFilePath = 'storage/product_img/product_' . $productNextId . ".png";
        $data = [
            'imageFilePath' => $imageFilePath,
        ];
        return view('listing', $data);
    }

    public function store(ExhibitionRequest $request){
        try{
            $product = new Product();
            $product->name = $request->name;
            $product->image = $request->image;
            $product->brand = $request->brand;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->condition = $request->condition;
            $product->save();

            $product->categories()->sync($request->input('category'));

            $productId = $product->id;

            $listing = new Listing();
            $listing->user_id = Auth::id();
            $listing->productId = $productId;
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
        $categories = Category::all();
        return view('product_detail', compact('product', 'categories'));
    }

    public function purchase($product_id){
        $product = Product::find($product_id);
        $profile = Profile::where('user_id', Auth::id())->first();
        return view('purchase', compact('product', 'profile'));
    }
}
