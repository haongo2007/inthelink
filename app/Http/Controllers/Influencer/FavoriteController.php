<?php

namespace App\Http\Controllers\Influencer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Cart;
use Auth;

class FavoriteController extends Controller
{
	public function index()
	{
		$user = Auth::user();
		$products = $user->favorite(Products::class)->where('status',Products::STATUS);
		return view('influencer.favorite.index',compact('products'));
	}
	public function add(Request $request)
    {
    	$state = '';
    	$product = Products::find($request->pid);
    	if ($product->isFavorited()) {
    		$product->removeFavorite();
    		$state = 'removed';
    	}else{
    		$product->addFavorite();
    		$state = 'added';
    	}
    	return ['message' => 'Item Successfully '.$state.' in wishlist', 'state' => $state];
    }    
}
