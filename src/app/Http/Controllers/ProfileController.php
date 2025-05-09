<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller
{
    //
    public function edit(){
        $userInfo = Auth::user();
        $imageFilePath = 'storage/img/' . $userInfo->name . "_image.png";
        $data = [
            'userInfo' => $userInfo,
            'imageFilePath' => $imageFilePath,
        ];
        return view('profile_register', $data);
    }

    public function index(){
        return view('profile');
    }

    public function store(Request $request){
        $profile = $request->all();
        Profile::create($profile);
        return redirect('/');
    }
}
