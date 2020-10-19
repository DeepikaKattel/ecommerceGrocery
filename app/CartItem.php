<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    public function product(){
    	return $this->belongsTo(Product::class);
    }
    public function cart(){
        return $this->belongsTo(Cart::class);
    }
}
