<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase;
use App\Models\Listing;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\Comment;


class Product extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'name', 'brand', 'price', 'description', 'condition'];

    public function listing(){
        return $this->hasOne(Listing::class);
    }

    public function purchase(){
        return $this->hasOne(Purchase::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function favorites(){
        return $this->hasMany(Favorite::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
