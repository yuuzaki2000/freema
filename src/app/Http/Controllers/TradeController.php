<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Trade;
use App\Models\Message;
use App\Models\Listing;
use Illuminate\Support\Facades\Auth;

class TradeController extends Controller
{
    //
    public function index($item_id, $trade_id)
    {
        if(Trade::find($trade_id)->buyer->id == Auth::id()){
            $product = Product::find($item_id);
            return view('trade_chat_buyer', compact('product'));
        }else{
            
        }
    }

    public function sendMessage(Request $request, $item_id){


        $trade = new Trade();
        $trade->product_id = $item_id;
        $trade->buyer_id = Auth::id();
        $trade->seller_id = Listing::where('product_id', $item_id)->first()->user_id;
        $trade->status = 'negotiating';
        $trade->save();

        $tradeId = $trade->id;

        $message = new Message();
        $message->trade_id = $tradeId;
        $message->user_id = Auth::id();
        $message->content = $request->content;
        $message->image = null;
        $message->save();

        return redirect("/products/{$item_id}/trade");
    }
}
