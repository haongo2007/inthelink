<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SupplierUpdateProfile;
use App\Models\Supplier;
use App\Models\Influencer;
use App\Models\User_info;
use Illuminate\Support\Str;
use App\Models\User_Bank;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index()
    {
    	return view('supplier.settings.profile');
    }
    public function edit($id = '')
    {
        if ($id) {
            $inf = Influencer::find($id);
            return view('supplier.settings.influencer',compact('inf'));
        }
        return view('supplier.settings.update');
    }
    public function update(SupplierUpdateProfile $request)
    {   
        $sup = Supplier::find(Auth('supplier')->user()->id);
        if ($images = $request->file('file')) {
            $extension = $images->getClientOriginalExtension();
            $filename  = Str::random(5).'.'.$extension;
            $images->storeAs('public/shop/'.Auth('supplier')->user()->id, $filename);
            $sup->banner_shop = '/shop/'.Auth('supplier')->user()->id.'/'.$filename;
        }
        $sup->email = $request->email;
        $sup->name_shop = $request->name_shop;
        $sup->password = Hash::make($request->new_password);
        $sup->change_password = 1;
        $sup->save();

        User_info::find(Auth('supplier')->user()->info_id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        $bank = User_Bank::where('s_id',Auth('supplier')->user()->id)->first();
        if (!$bank) {
            User_Bank::create([
                'bank_name' => $request->bank_name,
                'bank_number' => $request->bank_number,
                's_id' => Auth('supplier')->user()->id
            ]);
        }else{
            $bank->bank_name = $request->bank_name;
            $bank->bank_number = $request->bank_number;
            $bank->save();
        }
        return redirect()->route('supplier.settings')->withStatus(__('Change Profile Successfully!'));
    }
}
