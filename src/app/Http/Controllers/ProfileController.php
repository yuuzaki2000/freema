<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index(){
        $userInfo = Auth::user();
        $imageFilePath = 'storage/img/' . $userInfo->name . "_image.png";
        $data = [
            'userInfo' => $userInfo,
            'imageFilePath' => $imageFilePath,
        ];
        return view('profile_register', $data);
    }
}
