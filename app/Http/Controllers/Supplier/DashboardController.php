<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('supplier.dashboard.index');
    }
}
