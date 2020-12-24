<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';
    protected $fillable = ([
        'banner1','discount1','banner2','discount2'
    ]);
}
