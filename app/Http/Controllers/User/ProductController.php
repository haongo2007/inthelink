<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function show($pid,$fid = null)
    {
    	$product = Products::ProductDetailt($pid);
    	if (!$product) {
            session()->flash('error', 'This product does not exist.');
            return redirect()->route('user');
    	}
        $product_relations = Products::ProductRelations($product);
        $long_link = env('APP_URL').'/product/'.$pid.'/'.$fid;
    	return view('user.products.show',compact('product','product_relations','long_link'));
    }
}
