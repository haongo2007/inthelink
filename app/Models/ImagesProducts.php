<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagesProducts extends Model
{
    private $modelPath = "App\Models\\";
    
	protected $table = 'images_products';

	protected $fillable = [
        'images','product_id'
    ];
}
