<?php

namespace App\Http\Controllers\Supplier\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\LoginRequest;
use App\Models\Supplier;

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

    protected $redirectTo = '/supplier/dashboard';
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest:supplier')->except('logout');
    }

    public function guard()
    {
        return Auth::guard('supplier');
    }

    public function ShowLoginForm()
    {
        return view('supplier.auth.login');
    }
    public function SupplierLogin(LoginRequest $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (auth()->guard('supplier')->attempt($credentials,true)) {
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
        $this->guard('supplier')->logout();
        
        return $this->loggedOut($request) ?: redirect('/');
    }
    public function Devlogin()
    {
        return view('supplier.auth.dev');
    }
}
