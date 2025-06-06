<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Listing;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class Chain extends Component
{
    public $productId;
    public $product;

    public function mount(){
        $this->productNextId = DB::table('products')->max('id');
    }

    public function store($productNextId){


        $data = [
            'id' => 11,
            'image' => 'storage/product_img/Leather+Shoes+Product+Photo.jpg',
            'name' => '革靴',
            'price' => 4000,
            'description' => 'クラシックなデザインの革靴',
            'condition' => '状態が悪い',
        ];

        Product::create($data);
        
        $data = [
            'user_id' => Auth::id(),
            'product_id' => $productNextId,
        ];
        Listing::create($data);


    }


    public function render()
    {
        return view('livewire.chain');
    }
}
