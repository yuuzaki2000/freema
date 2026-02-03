<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'trade_id',
        'user_id',
        'content',
        'image',
    ];

    public function trade(){
        return $this->belongsTo(Trade::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
