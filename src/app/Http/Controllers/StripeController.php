<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;


class StripeController extends Controller
{
    //
    public function index(){
        return view('stripe_index');
    }

    public function checkout(Request $request){
        $data = [
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'payment_method' => $request->payment_method,
        ];
        Purchase::create($data);


        Stripe::setApiKey(config('stripe.sk'));

        $session = Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'T-shirt',
                        ],
                        'unit_amount' => 2000,
                    ],
                    'quantity' => 1,
                ]
            ],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('index'),
        ]);

        return redirect()->away($session->url);
    }

    public function success(){
        return view('stripe_index');
    }
}
