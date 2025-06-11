<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileUploadController extends Controller
{
    //
    public function store(Request $request){
        $imageName = Auth::user()->name . "_image.png";
        $request->file('file')->storeAs('public/profile_img',$imageName);
        return redirect('/mypage/profile');
    }
}
