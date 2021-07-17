<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
//use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;

use Socialite;
class SocialController extends Controller
{
    public function redirect($provider)
    {
     return Socialite::driver($provider)->redirect();
    }


    public function Callback($provider){
        $userSocial =   Socialite::driver($provider)->stateless()->user();
        $users       =   User::where(['email' => $userSocial->getEmail()])->first();
if($users){
            Auth::login($users);
            return redirect('/');
        }else{
$user = User::create([
                'firstname'     => $userSocial->getName(),
                'lastname'      => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'pays'          =>'Benin',
                'numTel'        =>'64968008',
                'profile_image' => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider,
                
            /*'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),*/
            ]);
         return redirect()->route('home');
        }
}
}