<?php

namespace App\Models;

use ChristianKuri\LaravelFavorite\Traits\Favoriteability;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Influencer extends Authenticatable
{
    use Notifiable;
    use Favoriteability;

    protected $guard = 'influencer';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'provider', 'provider_id', 'info_id', 'change_password'
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
    public function GetBank()
    {
        return $this->hasOne(User_Bank::class,'f_id','id');
    }
    public function GetLinkCoppied()
    {
        return $this->hasMany(CoppyLink::class,'f_id','id');
    }
}
