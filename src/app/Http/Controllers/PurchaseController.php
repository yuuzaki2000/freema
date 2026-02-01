<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    //
    public function store(Request $request, $item_id){
        Purchase::create([
            'user_id' => Auth::id(),
            'product_id' => $item_id,
            'payment_method' => null,
            'post_code' => null,
            'address' => null,
            'building' => null,
        ]);
        return redirect("/products/{$item_id}/trade#modal");
    }
}
