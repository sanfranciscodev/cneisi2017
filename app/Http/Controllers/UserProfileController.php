<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Entities\UserProfile

class UserProfileController extends Controller
{
    const USER_PROFILE_ROUTE = 'users/';

    const USER_PROFILE_SHOW_VIEW = 'users.userProfile';

    public function show(int $userId)
    {
        $userProfile = Speaker::find($userId);

        return view(self::USER_PROFILE_SHOW_VIEW)
            ->with('userProfile', $userProfile);
    }
}
