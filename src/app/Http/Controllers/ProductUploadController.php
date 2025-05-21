<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductUploadController extends Controller
{
    //
    public function store(Request $request){
        $nextId =  DB::table('products')->max('id') + 1;
        $imageName = 'product_' . $nextId . ".png";
        $request->file('file')->storeAs('public/product_img', $imageName);
        return redirect('/sell');
    }
}
