<?php

namespace App\Http\Controllers\Influencer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Supplier;
use Bitly;

class ProductController extends Controller
{
    public function supplier($uid)
    {
        $supplier = Supplier::find($uid);
    	$products = Products::ProductSupplier($uid);
    	return view('influencer.products.supplier',compact('products','supplier'));
    }
    public function show($pid)
    {
        $long_link = env('APP_URL').'/product/'.$pid.'/'.Auth('influencer')->user()->id;
        //$short_link = Bitly::getUrl($long_link);
        $short_link = $long_link;
    	$product = Products::ProductDetailt($pid);

        $product_relations = Products::ProductRelations($product);
    	return view('influencer.products.show',compact('product','short_link','long_link','product_relations'));
    }
    public function list()
    {
        $products = Products::ProductList();
        return view('influencer.products.list',compact('products'));
    }
}