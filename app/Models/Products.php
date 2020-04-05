<?php

namespace App\Models;

use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Products extends Model
{
	use Favoriteable;

    const STATUS = 1;
    const PAGINATE = 8;

    protected $table="products";

    protected $fillable = [
    'title', 'slug', 'price', 'description', 'creator_id', 'categories_id', 'available_sample', 'sell_influencer', 'start_time_selling', 'end_time_selling'
    ];
    /* Get product image */
    public function GetImage(){
        return $this->hasMany(ImagesProducts::class,'product_id','id');
    }
    /* Get product categories */
    public function GetCategories()
    {
        return $this->hasOne(Categories::class,'id','categories_id');
    }
    /* Get product detail use in Controller */
    public static function ProductDetailt($id)
    {
        return self::where('id',$id)->first();
    }
    /* Get product list use in Controller */
    public static function ProductList($q = '')
    {   
        if (!$q) {
            $q = self::query();
        }
        if (request('count')) {
            $perpage = request('count');
        }else{
            $perpage = self::PAGINATE;
        }
        return app(Pipeline::class)
        ->send($q->where('status',self::STATUS))
        ->through([
            \App\QueryFilters\Sort::class,
        ])
        ->thenReturn()
        ->paginate($perpage);
    }
    /* Get product list by supplier use in Controller */
    public static function ProductSupplier($id)
    {
        return self::ProductList(self::query()->where('creator_id',$id));
    }
    /* Get product list use in Controller */
    public static function ProductsNew()
    {
        return self::where('status',self::STATUS)
        ->orderBy('id','desc')
        ->get();
    }
    /* find product relation with main product use in Controller */
    public static function ProductRelations($product)
    {
        return self::where('status',self::STATUS)
        ->where('id','!=',$product->id)
        ->where(function($q) use ($product) {
            $q->where('categories_id',$product->categories_id);
        })
        ->take(8)
        ->get();
    }
    /* find product in all categories use in Controller */
    public static function SearchAllCategories($id)
    {
        return self::ProductList(self::query()->whereIn('categories_id',$id));
    }
    public function GetPrice()
    {
        $price = number_format($this->price);
        if ($this->discount > 0) {
            $price = number_format($this->price - $this->discount);
        }
        return $price;
    }
    public function CheckStock()
    {
        $stock = 'Out of stock';
        if (intval($this->in_stock) > 0) {
            $stock = 'instock';
        }
        return $stock;
    }
    public function CaculatorPercentDiscount()
    {
        return number_format($this->discount / $this->price * 100);
    }
    public function GetLinkShare()
    {
        return env('APP_URL').'/product/'.$this->id.'/'.Auth('influencer')->user()->id;
    }
    public function GetSupplier()
    {
        return $this->hasOne(Supplier::class,'id','creator_id');
    }
    public function GetNameShop()
    {
        $name_shop = $this->GetSupplier->name_shop;
        if (!$name_shop) {
            $name_shop = $this->GetSupplier->GetInfo->name;
        }
        return $name_shop;
    }
}
