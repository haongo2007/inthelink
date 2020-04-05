<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $table="requests";

    protected $fillable = [
    	'message', 'p_id', 'f_id','s_id', 'status', 'type'
    ];

    public function Influencer()
    {
        return $this->hasOne(Influencer::class,'id','f_id');
    }

    public function Product()
    {
        return $this->hasOne(Products::class,'id','p_id');
    }
}
