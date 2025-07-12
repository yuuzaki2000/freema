<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;

class Connect extends Component
{
    use WithFileUploads;

    public $file;
    public $imageUrl;
    public $fileName;
    public $user;

    public function mount($userId){
        $this->user = User::find($userId);
    }


    public function onChange($value){
        $this->fileName = substr($value, 12);
        $this->imageUrl = 'storage/profile_img/'. $this->fileName;
    }

    public function render()
    {
        return view('livewire.connect');
    }
}
