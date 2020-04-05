<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class CartController extends Controller
{
    public function index()  {
        $cartCollection = \Cart::getContent();
        dd($cartCollection);
    }
    public function add(Request $request){
    	$product = Products::find($request->pid);
    	if (!$product) {
    		session()->flash('error', 'This product does not exist.');
            return redirect()->route('user');
    	}
    	\Cart::add(array(
		    'id' => $product->id, // inique row ID
		    'name' => $product->title,
		    'price' => $product->price,
		    'quantity' => $request->qty
		));
		$data = \Cart::getContent();
		return view('layouts.user.component.cart',compact('data'));
    }
}
