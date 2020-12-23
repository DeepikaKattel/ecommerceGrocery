<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ([
        'id', 'name','description','quantity', 'rate'
    ]);

    public function department(){
    	return $this->belongsTo(Department::class);
    }
    public function cartItem(){
        return $this->hasMany(Cart::class);
    }
}
