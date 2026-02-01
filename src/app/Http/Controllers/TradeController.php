<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class TradeController extends Controller
{
    //
    public function index($item_id)
    {
        return view('trade_chat_buyer', compact('item_id'));
    }
}
