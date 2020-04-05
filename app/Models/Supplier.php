<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Supplier extends Authenticatable
{
    use Notifiable;

    protected $guard = 'supplier';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'provider', 'provider_id', 'info_id', 'change_password', 'banner_shop', 'name_shop'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token',
    ];
    public function GetInfo(){
        return $this->hasOne(User_info::class,'id','info_id');
    }
    public function GetAvatar(){
        return $this->hasOne(Storage_file::class,'target_id','id')->where('target_type','avatar');
    }
    public function CountProduct(){
        return $this->hasMany(Products::class,'creator_id')->count();
    }
    public function GetBank()
    {
        return $this->hasOne(User_Bank::class,'s_id','id');
    }
}
