<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart;

class checkout extends Model
{
    public function cart() {
        return $this->hasOne(Cart::class);
    }
}
