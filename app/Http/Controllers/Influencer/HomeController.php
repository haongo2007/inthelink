<?php

namespace App\Http\Controllers\Influencer;
use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Categories;
use App\Http\Requests\InfluencerUpdatePassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banner_categories = Categories::take(4)->get();
        $new_products = Products::ProductsNew();
        return view('influencer.home.index',compact('banner_categories','new_products'));
    }
}
