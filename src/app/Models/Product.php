<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase;
use App\Models\Exhibition;
use App\Models\Category;


class Product extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'name', 'brand', 'price', 'description', 'condition'];

    public function exhibition(){
        return $this->hasOne(Exhibition::class);
    }

    public function purchase(){
        return $this->hasOne(Purchase::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class)->withTimestamps();
    }
}
