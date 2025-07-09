<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Listing;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Livewire\WithFileUploads;

class Chain extends Component
{
    use WithFileUploads;

    public $file;
    public $image_url;
    public $file_name;

    public function mount(){
    }


    public function onChange($value){
        $this->file_name = substr($value, 12);
        $this->image_url = 'storage/product_img/'. $this->file_name;
    }

    public function render()
    {
        return view('livewire.chain');
    }
}
