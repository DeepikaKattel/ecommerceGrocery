<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','house_number','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }

    public function isAdmin() {
        return $this->user_role == 1 ? TRUE : FALSE;
    }

    public function isStaff() {
        return $this->user_role == 1 || $this->user_role == 2 ? TRUE : FALSE;
    }

    public function userRole() {
        return $this->belongsTo(UserRole::class);
    }

    public function hasRole($id) {
        return $this->user_role == $id ? TRUE : FALSE;
    }
}
