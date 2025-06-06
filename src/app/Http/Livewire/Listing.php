<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Listing extends Component
{

    public $productId;

    public function mount(){
        $this->productId = DB::table('products')->max('id');
    }

    public function store($productId){
        $data = [
            'user_id' => Auth::id(),
            'product_id' => $productId,
        ];
        Listing::create($data);
    }
    
    public function render()
    {
        return view('livewire.listing');
    }
}
