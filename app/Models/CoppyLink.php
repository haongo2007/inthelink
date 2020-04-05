<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoppyLink extends Model
{
	protected $table = 'coppy_link';

	protected $fillable = [
        'link', 'f_id', 'p_id'
    ];

    public function GetProduct()
    {
        return $this->hasOne(Products::class,'id','p_id')->where('status',Products::STATUS);
    }
}
