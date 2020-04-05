<?php

namespace App\Http\Controllers\Influencer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Requests;
use Auth;

class RequestsController extends Controller
{
    public function Send(Request $request)
    {	
    	$request->request->add(['f_id' => Auth('influencer')->user()->id]);
        $result = Requests::create($request->all());
        if ($result) {
            return 200;
        }else{
            return 201;
        }
    }
}
