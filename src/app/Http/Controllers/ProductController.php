<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index() {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function add(){
        return view('product_register');
    }

    public function store(Request $request){
        $product = $request->all();
        Product::create($product);
        return redirect('profile');
    }
}
