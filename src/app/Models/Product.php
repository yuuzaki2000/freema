<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Product extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'name', 'brand', 'price', 'description', 'condition'];

    public function categories(){
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function exhibitions(){
        return $this->hasMany(Exhibition::class);
    }
}
