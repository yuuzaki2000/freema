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
    public $profileAddress;
    public $profileBuilding;


    public function mount($productId){
        $this->product = Product::find($productId);
        $this->productName = $this->product->name;
        $this->productPrice = $this->product->price;
        $this->productImage = $this->product->image;
        $this->profileAddress = Profile::where('user_id', Auth::id())->first()->address;
        $this->profileBuilding = Profile::where('user_id', Auth::id())->first()->building;
    }

    public function store($productId){

        $data = [
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'payment_method' => $this->paymentMethod
        ];
        Purchase::create($data);
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
