<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Storage_file extends Model
{
	protected $table = 'storage_file';

	protected $fillable = [
        'path', 'target_id', 'target_type',
    ];
    
}
