<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Listing;

class ListingController extends Controller
{
    //
    public function store(){
        $product_id = DB::table('products')->max('id');
        $data = [
            'user_id' => Auth::id(),
            'product_id' => $product_id,
        ];
        Listing::create($data);
        return redirect('/');
    }
}
