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
    public function index($item_id){
        $trade = Product::find($item_id)->trade->first();
        return redirect("/products/{$item_id}/trades/{$trade->id}");
    }

    public function getDetail($item_id, $trade_id){
        if(Trade::find($trade_id)->buyer->id == Auth::id()){
            $trade = Trade::find($trade_id);
            if($trade->status == 'negotiating'){
                $product = Product::find($item_id);
                //Messageデータも送る予定
                return view('trade_chat_buyer', compact('product'));
            }else if($trade->status == 'completed'){
                return redirect('/products/{$item_id}/trades/{$trade->id}');
            }
        }else if(Trade::find($trade_id)->seller->id == Auth::id()){
            $product = Product::find($item_id);
            return view('trade_chat_seller', compact('product'));
        }else{
        }
    }

    public function sendMessage(Request $request, $item_id){

        if($request->page == 'buyer'){
            $trade = Trade::where('product_id', $item_id)->where('buyer_id', Auth::id())->first();
        }else if($request->page == 'seller'){
            $trade = Trade::where('product_id', $item_id)->where('seller_id', Auth::id())->first();
        }else{
            $trade = null;
        }

        //選択した画像をstorage/message_imgに保存

        Message::create([
            'trade_id' => $trade->id,
            'user_id' => Auth::id(),
            'content' => $request->input('content'),
            'image' => null,
        ]);

        return redirect("/products/{$item_id}/trades/{$trade->id}");
    }
}
