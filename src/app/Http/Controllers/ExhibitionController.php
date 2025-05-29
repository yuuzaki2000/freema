<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Exhibition;
use Illuminate\Support\Facades\Auth;

class ExhibitionController extends Controller
{
    //
    public function store(){
        $product_id = DB::table('products')->max('id');
        $exhibition = [
            'id' => DB::table('exhibitions')->max('id') + 1,
            'user_id' => Auth::id(),
            'product_id' => $product_id,
        ];
        Exhibition::create($exhibition);
    }
}
