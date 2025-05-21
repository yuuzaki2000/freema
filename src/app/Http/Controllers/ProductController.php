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
        $exhibit = Exhibit::where('user_id', Auth::id())->first();
        return view('index', compact('products','exhibit'));
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
}
