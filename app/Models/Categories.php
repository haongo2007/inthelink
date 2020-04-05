<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    const PARENT_ID = 0;
    
	protected $table = 'categories';

	protected $fillable = [
        'name', 'sort_order', 'parent', 'banner', 'creator_id'
    ];
    
    public function Supplier(){
        return $this->hasOne(Supplier::class,'id','creator_id');
    }
    public function Childs() {
        return $this->hasMany(self::class,'parent');
    }
    public function CheckHasChilds() {
        return $this->Childs()->exists() ;
    }
}
