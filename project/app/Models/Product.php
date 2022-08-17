<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Report;
use App\Models\Inventory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function inventory(){
        return $this->belongsTo(Inventory::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function reports(){
        return $this->belongsToMany(Report::class);
    }
}
