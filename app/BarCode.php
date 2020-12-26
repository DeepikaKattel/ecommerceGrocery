<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarCode extends Model
{
    protected $table = 'bar_codes';
    protected $fillable = ([
        'title','image'
    ]);
}
