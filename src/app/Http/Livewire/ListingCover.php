<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Listing;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Livewire\WithFileUploads;

class ListingCover extends Component
{
    use WithFileUploads;

    public $photo;
    public $photo_path;

    public function mount(){
    }


    public function updatedPhoto(){
        $file_name = $this->photo->getClientOriginalName();
        $this->photo->storeAs('public/product_img', $file_name);
        $this->photo_path = 'storage/product_img/' . $file_name;
    }

    public function render()
    {
        return view('livewire.listing-cover');
    }
}

