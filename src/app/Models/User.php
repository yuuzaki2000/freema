<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Profile;
use App\Models\Purchase;
use App\Models\Listing;
use App\Models\Favorite;
use App\Models\Comment;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function listings(){
        return $this->hasMany(Listing::class);
    }

    public function purchases(){
        return $this->hasMany(Purchase::class);
    }

    public function favorites(){
        return $this->hasMany(Favorite::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function stars(){
        return $this->hasMany(Star::class);
    }

    public function buyersInTrade(){
        return $this->hasMany(Trade::class, 'buyer_id');
    }

    public function sellersInTrade(){
        return $this->hasMany(Trade::class, 'seller_id');
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }
}
