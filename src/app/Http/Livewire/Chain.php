<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Listing;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class Chain extends Component
{
    


    public function mount(){

        
    }

    public function onChange(){

    }



    public function render()
    {
        return view('livewire.chain');
    }
}
