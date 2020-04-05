<?php

namespace App\Http\Controllers\Influencer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;

class CategoriesController extends Controller
{
	public function show($id)
	{
		$categories = Categories::find($id);
		$ar = [intval($id)];

		if ($categories->CheckHasChilds()) {
			foreach ($categories->Childs as $key => $value) {
				array_push($ar, $value->id);
				if ($value->CheckHasChilds()) {
					foreach ($value->Childs as $key => $val) {
						array_push($ar, $val->id);
					}
				}
			}
		}
		$products = Products::SearchAllCategories($ar);
		return view('influencer.categories.index',compact('products','categories'));
	}
}
