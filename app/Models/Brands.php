<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    private $modelPath = "App\Models\\";
    
	protected $table = 'brands';

	protected $fillable = [
        'name', 'sort_order', 'banner', 'creator_id'
    ];
    
    public function Supplier(){
        return $this->hasOne($this->modelPath."Supplier",'id','creator_id');
    }
}
