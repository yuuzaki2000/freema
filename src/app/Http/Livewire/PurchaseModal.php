<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class PurchaseModal extends Component
{
    public $paymentMethod;
    public $product;
    public $productName;
    public $productPrice;
    public $address;
    public $building;
    public $post_code;


    public function mount($productId, $post_code, $address, $building){
        $this->product = Product::find($productId);
        $this->productName = $this->product->name;
        $this->productPrice = $this->product->price;
        $this->productImage = $this->product->image;
        $this->address = $address;
        $this->building = $building;
        $this->post_code = $post_code;
    }

    public function getAddressChange($productId){
        $product = Product::find($productId);
        return redirect()->route('addressChange', $product);
    }

    public function render()
    {
        return view('livewire.purchase-modal');
    }
}
