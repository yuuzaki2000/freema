<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use App\Models\Profile;

class ProfileModal extends Component
{
    use WithFileUploads;

    public $image_url;
    public $user;
    public $profile;

    public function mount($userId, $profileId){
        $this->user = User::find($userId);
        $this->profile = Profile::find($profileId);
    }

    public function onChange($value){
        $file_name = substr($value, 12);
        $this->image_url = 'storage/profile_img/'. $file_name;
    }

    public function render()
    {
        return view('livewire.profile-modal');
    }
}
