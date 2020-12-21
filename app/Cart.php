<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CartItem;
use App\Checkout;
use App\User;

class Cart extends Model
{
    protected $attributes = [
        'grand_total' => 0,
    ];

    public function cartItem(){
    	return $this->hasMany(CartItem::class);
    }
    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function getCheckout() {
        return $this->hasOne(Checkout::class);
    }
}
