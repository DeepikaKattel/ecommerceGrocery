<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExcelProduct extends Model
{
    protected $table = 'excel';
    protected $fillable = ([
        'id', 'name','category','quantity', 'rate'
    ]);
}
