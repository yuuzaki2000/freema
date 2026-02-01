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
            'user_id' => 2,
            'point' => $request->star_point,
        ]);
        return redirect('/');
    }
}
