<?php

namespace App\Http\Controllers\Socialite;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Zalo\Zalo;
use Socialite;
use App\Models\User_info;
use App\Models\Influencer;
use App\Models\Supplier;
use App\Models\Storage_file;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Session;

class LoginController extends Controller
{

    /**
     * default scope get info user facebook
     *
     * @return void
     */
    const facebookScope = [
    'user_birthday',
    'user_location',
    'user_gender',
    ];

    /**
     * Initialize Facebook fields to override
     */
    const facebookFields = [
        'name', // Default
        'email', // Default
        'gender', // Default
        'birthday', // I've given permission
        'location', // I've given permission
    ];

    /**
     * Login by social network account
     *
     * @param  \Illuminate\Http\Request  $provider
     * @return \Illuminate\Http\Response
     */
    public function Redirect($provider,$position)
    {   
        Session::forget('position');
        Session::put('position', $position);
        switch ($provider) {
            case 'facebook':
                    return Socialite::driver($provider)->fields(self::facebookFields)->scopes(self::facebookScope)->redirect();
                break;
            
            case 'zalo':
                    $config = array(
                        'app_id' => env('ZALO_CLIENT_ID'),
                        'app_secret' => env('ZALO_CLIENT_SECRET'),
                        'callback_url' => env('ZALO_REDIRECT')
                    );
                    $zalo = new Zalo($config);
                    $helper = $zalo->getRedirectLoginHelper();
                    $callbackUrl = env('ZALO_REDIRECT');
                    $loginUrl = $helper->getLoginUrl($callbackUrl); // This is login url
                    return redirect()->to($loginUrl);
                break;
        }
    }
    /**
     * callback to write data into databbase
     *
     * @param  \Illuminate\Http\Request  $provider
     * @return \Illuminate\Http\Response
     */
    public function SocalCallback(Request $request ,$provider)
    {
        $position = session('position');
        if ($provider == 'zalo') {
            $url_get_token = 'https://oauth.zaloapp.com/v3/access_token?app_id='.env('ZALO_CLIENT_ID').'&app_secret='.env('ZALO_CLIENT_SECRET').'&code='.$request->code;
            $data = file_get_contents($url_get_token);
            $data = json_decode($data);
            $token = $data->access_token;
            $link = 'https://graph.zalo.me/v2.0/me?access_token='.$token.'&fields=id,birthday,name,gender,picture';
            $getInfo = json_decode(file_get_contents($link));
            $user = $this->createUser($getInfo,$provider,$token,$position);
        }else{
            $getInfo = Socialite::driver($provider)->fields(self::facebookFields)->user();
            $token = $getInfo->token;
            $user = $this->createUser($getInfo,$provider,$token,$position);
            if (is_bool($user) && $user == true) {
                return redirect()->route($position.'.login')->withErrors('Your Email Already Exists');
            }
        }
        auth($position)->login($user); 
        return redirect()->to($position.'/dashboard');
    }
    /**
     * helper 
     *
     * @param  \Illuminate\Http\Request  $provider
     * @return \Illuminate\Http\Response
     */
    public function createUser($getInfo,$provider,$token,$position){
        switch ($position) {
            case 'influencer':
                $user = Influencer::where('provider_id', $getInfo->id)->first();
                if (!$user) {
                    $user = new Influencer();
                }else{
                    return $user;
                }
                break;
            case 'supplier':
                $user = Supplier::where('provider_id', $getInfo->id)->first();
                if (!$user) {
                    $user = new Supplier();
                }else{
                    return $user;
                }
                break;
        }
        /* process zalo */
        if ($provider == 'zalo') {
            $info = User_info::create([
                'name' => $getInfo->name ?? null,
                'gender' => $getInfo->gender ?? null,
                'birthday' => $getInfo->birthday ? Carbon::createFromFormat('d/m/Y', $getInfo->birthday) : null,
            ]);
            $user = $user::create([
                'password'    => Hash::make(Str::random(15)),
                'provider' => $provider,
                'provider_id' => $getInfo->id,
                'access_token' => $token,
                'info_id' => $info->id
            ]);
            $Storage_file = Storage_file::create([
                'path' => $getInfo->picture->data->url ?? '/images/default/user.jpg',
                'target_type' => 'avatar',
                'target_id' => $user->id
            ]);
        }else{

            if ($getInfo->email != null) {
                $checkemail = $user::where('email',$getInfo->email)->exists();
                if ($checkemail) {
                    return $checkemail;
                }   
            }

            /* process facebook */
            $info = User_info::create([
                'name' => $getInfo->name ?? null,
                'gender' => $getInfo->user['gender'] ?? null,
                'address' => $getInfo->user['location']['name'] ?? null,
                'birthday' => (isset($getInfo->user['birthday'])) ? Carbon::createFromFormat('d/m/Y', $getInfo->user['birthday']) : null,
            ]);
            $user = $user::create([
                'password'    => Hash::make(Str::random(15)),
                'email'    => $getInfo->email ?? null,
                'provider' => $provider,
                'access_token' => $token,
                'provider_id' => $getInfo->id,
                'info_id' => $info->id
            ]);
            $Storage_file = Storage_file::create([
                'path' => $getInfo->avatar_original ?? '/images/default/user.jpg',
                'target_type' => 'avatar',
                'target_id' => $user->id
            ]);
        }
        return $user;
    }
}
