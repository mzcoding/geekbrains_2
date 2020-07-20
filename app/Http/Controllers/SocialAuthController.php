<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function vkAuth()
	{
		return Socialite::with('vkontakte')->redirect();
	}

	public function vkAuthCallback()
	{
		$user = Socialite::driver('vkontakte')->user();
		$nickname = $user->getNickname();
		$email = $user->getEmail();
		dd($user);
	}
}
