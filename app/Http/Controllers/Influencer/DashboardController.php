<?php

namespace App\Http\Controllers\Influencer;
use App\Http\Controllers\Controller;
use App\Models\Influencer;
use App\Http\Requests\InfluencerUpdatePassword;
use Illuminate\Http\Request;
use App\Http\Requests\InfluencerUpdateProfile;
use Illuminate\Support\Facades\Hash;
use App\Models\User_info;
use App\Models\User_Bank;

class DashboardController extends Controller
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
        return view('influencer.dashboard.index');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(InfluencerUpdatePassword $request)
    {
        Influencer::find(Auth('influencer')->user()->id)->update([
            'password' => Hash::make($request->new_password),
            'change_password' => 1
        ]);
        return redirect()->route('influencer.dashboard')->withStatus(__('Change Password Successfully!'));
    }
    public function updateProfile(InfluencerUpdateProfile $request)
    {
        $inf = Influencer::find(Auth('influencer')->user()->id)->update([
            'email' => $request->email,
        ]);
        User_info::find(Auth('influencer')->user()->info_id)->update([
            'name' => $request->name,
            'phone' => $request->phone
        ]);
        $bank = User_Bank::where('f_id',Auth('influencer')->user()->id)->first();
        if (!$bank) {
            User_Bank::create([
                'bank_name' => $request->bank_name,
                'bank_number' => $request->bank_number,
                'f_id' => Auth('influencer')->user()->id
            ]);
        }else{
            $bank->bank_name = $request->bank_name;
            $bank->bank_number = $request->bank_number;
            $bank->save();
        }
        return redirect()->route('influencer.dashboard')->withStatus(__('Change Profile Successfully!'));
    }
}
