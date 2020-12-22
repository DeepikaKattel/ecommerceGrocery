<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function department(){
    	return $this->belongsTo(Department::class);
    }
    public function cartItem(){
        return $this->hasMany(Cart::class);
    }
}
