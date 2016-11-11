<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Socialite; //socialite namespace

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