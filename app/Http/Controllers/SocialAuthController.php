<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Entities\SocialAccountService;
use App\Http\Requests;

class SocialAuthController extends Controller
{
    //redirect function
    public function redirect()
    {
    	return Socialite::driver('facebook')->redirect();
    }
    //callback function
    public function callback(SocialAccountService $service, $provider)
    {
    	$user = $service->createOrGetUser(Socialite::driver($provider)->user());
    	auth()->login($user);
    	return redirect()->to('/home');
    }
}