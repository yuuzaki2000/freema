<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Purchase;


class Bind extends Component
{
    public $paymentMethod;
    public $product;
    public $productName;
    public $productPrice;


    public function mount($id){
        $this->product = Product::find($id);
        $this->productName = $this->product->name;
        $this->productPrice = $this->product->price;
    }

    public function store($id){
        $data = [
            'user_id' => 1,
            'product_id' => $id,
            'payment_method' => $this->paymentMethod
        ];
        Purchase::create($data);
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.bind');
    }
}
