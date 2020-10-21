<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frontend extends Model
{
    protected $table = 'frontend';
    protected $fillable = ([
        'heading','message','image',
    ]);
}
