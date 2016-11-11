<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Requests;

class SocialAuthController extends Controller
{
    //redirect function
    public function redirect()
    {
    	return Socialite::driver('facebook')->redirect();
    }
    //callback function
    public function callback()
    {
    	//when fb call us with a token 
    }
}