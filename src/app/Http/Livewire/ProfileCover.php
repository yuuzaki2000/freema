<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use App\Models\Profile;

class ProfileCover extends Component
{
    use WithFileUploads;

    public $photo;
    public $photo_path;
    public $user;
    public $profile;

    public function mount($userId, $profileId){
        $this->user = User::find($userId);
        $this->profile = Profile::find($profileId);
    }

    public function updatedPhoto(){
        $file_name = $this->photo->getClientOriginalName();
        $this->photo->storeAs('public/profile_img' . $file_name);
        $this->photo_path = 'storage/profile_img/' . $file_name;
    }

    public function render()
    {
        return view('livewire.profile-cover');
    }
}

