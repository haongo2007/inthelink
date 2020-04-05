<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Bank extends Model
{
    protected $table = 'info_bank';

	protected $fillable = [
        'bank_name', 'bank_number', 'f_id', 's_id'
    ];
}
