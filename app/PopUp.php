<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PopUp extends Model
{
    protected $table = 'pop_ups';
    protected $fillable = ([
        'title','discount1','banner'
    ]);

}
