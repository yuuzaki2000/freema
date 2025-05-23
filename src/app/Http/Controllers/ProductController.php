<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Exhibit;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //
    public function index() {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function add(){
        $userId = Auth::id();
        $productNextId = DB::table('products')->max('id') + 1;
        $imageFilePath = 'storage/product_img/product_' . $productNextId . ".png";
        $data = [
            'userId' => $userId,
            'productNextId' => $productNextId,
            'imageFilePath' => $imageFilePath,
        ];
        return view('product_register', $data);
    }

    public function store(Request $request){
        $product = $request->all();
        Product::create($product);
        $exhibit = $request->all();
        Exhibit::create($exhibit);
        return redirect('/');
    }

    public function search(Request $request){
        $products = Product::where('name', 'like', "%{$request->keyword}%")->get();
        return view('index', compact('products'));
    }
}
