<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;


class Bind extends Component
{
    public $paymentMethod;
    public $product;
    public $productName;
    public $productPrice;
    public $text;


    public function mount($productId, $text){
        $this->product = Product::find($productId);
        $this->productName = $this->product->name;
        $this->productPrice = $this->product->price;
        $this->text = $text;
    }

    public function store($productId){
        /*
        $data = [
            'id' => 11,
            'image' => 'storage/product_img/Leather+Shoes+Product+Photo.jpg',
            'name' => '革靴',
            'price' => 4000,
            'description' => 'クラシックなデザインの革靴',
            'condition' => '状態が悪い',
        ];

        Product::create($data);  */


        $data = [
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'payment_method' => $this->paymentMethod
        ];
        Purchase::create($data);
        return redirect('/');
    }

    public function getAddressChangeView($productId){
        $product = Product::find($productId);
        return redirect()->route('addressChange', $product);
    }

    public function render()
    {
        return view('livewire.bind');
    }
}
