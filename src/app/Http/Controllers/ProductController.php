<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Exhibition;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //
    public function index() {
        $exhibitions = Exhibition::where('user_id', Auth::id())->get();
        $products = Product::all();
        foreach($exhibitions as $exhibition){
            if($exhibition->product_id != null){
                $products->find($exhibition->product_id)->delete();
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
        return view('exhibition', $data);
    }

    public function store(Request $request){
        $product = $request->all();
        Product::create($product);
        $productId = DB::table('products')->max('id');

        $data = [
            'product_id' => $producId,
            'user_id' => $request->user_id,
        ];
        Exhibition::create($data);
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
