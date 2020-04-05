<?php

namespace App\Http\Controllers\Influencer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;

class ShopController extends Controller
{
    public function index()
    {
    	$shop = Supplier::all();
    	return view('influencer.shop.index',compact('shop'));
    }
}
