<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductUploadController extends Controller
{
    //
    public function store(Request $request){
        $file_name =$request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('public/product_img', $file_name);
        $imageFilePath = 'storage/product_img/' . $file_name;
        return redirect('/sell');
    }
}
