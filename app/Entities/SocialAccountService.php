<?php
namespace App\Entities;

//use Laravel\Socialite\Contracts\User as ProviderUser;
use Laravel\Socialite\Contracts\provider;


class SocialAccountService
{
	public function createOrGetUser(Provider $provider)
	{
		$providerUser = $provider->user();
		$providerName = class_basename($provider);

		$account = SocialAccount::whereProvider($providerName)
			->whereProviderUserId($providerUser->getId())
			->first();

		if ($account) {

			return $account->user;

		} else {

			$account = new SocialAccount([
				'provider_user_id' => $ProviderUser->getId(),
				'provider' => $providerName

				]);

			$user = User::whereEmail($providerUser->getEmail())->first();

			if (!$user) {

				$user = User::create{[
					'email' => $providerUser->getEmail(),
					'name' => $providerUser->getName(),
				]};
			}

			$account->user()->associate($user);
			$account->save();

			return $user;

		}
	}
}