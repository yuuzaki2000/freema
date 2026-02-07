<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Star;

class StarController extends Controller
{
    //
    public function store(Request $request)
    {
        Star::create([
            'user_id' => $request->input('star_receiver_id'),
            'point' => $request->star_point,
        ]);
        return redirect('/');
    }
}
