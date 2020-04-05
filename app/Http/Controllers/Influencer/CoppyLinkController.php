<?php

namespace App\Http\Controllers\Influencer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CoppyLink;

class CoppyLinkController extends Controller
{
    public function save(Request $request)
    {
    	$request->request->add(['f_id' => Auth('influencer')->user()->id]);
        $findorfail = CoppyLink::where([['f_id' , Auth('influencer')->user()->id],['p_id' , $request->p_id],['link' , $request->link]])->exists();
        if (!$findorfail) {
            $result = CoppyLink::create($request->all());
        }
        return 200;
    }
}
