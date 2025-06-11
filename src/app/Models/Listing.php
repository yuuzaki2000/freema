<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'productId'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
