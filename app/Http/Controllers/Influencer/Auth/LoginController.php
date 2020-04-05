<?php

namespace App\Http\Controllers\Influencer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Zalo\Zalo;
use App\Models\Influencer;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Admin Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating Admin for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/influencer/dashboard';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('guest:influencer')->except('logout');
    }

    public function guard()
    {
        return Auth::guard('influencer');
    }

    public function ShowLoginForm()
    {
        return view('influencer.auth.login');
    }
    public function InfluencerLogin(LoginRequest $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (auth()->guard('influencer')->attempt($credentials,true)) {
            return redirect($this->redirectTo);
        } else {
            return redirect()->back()->withErrors('Email or password is incorrect');
        }
    }
    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard('influencer')->logout();
        
        return $this->loggedOut($request) ?: redirect('/');
    }

    public function Devlogin()
    {
        return view('influencer.auth.dev');
    }
}
