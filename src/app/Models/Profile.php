<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'user_id', 'post_code', 'address', 'building'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
