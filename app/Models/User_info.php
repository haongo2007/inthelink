<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
	protected $table = 'info_user';

	protected $fillable = [
        'name', 'phone', 'birthday', 'gender', 'address',
    ];
    
    public function GetAvatar(){
        return $this->hasOne(Storage_file::class,'id')->where('target_type','avatar');
    }
}
