<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Entities\User;
use App\Entities\UserProfile;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests;
use Auth;

class UserProfileController extends Controller
{
    /**
     * Related routes.
     */
    const ROOT = '/';

    /**
     * Related views.
     */
    const PROFILES_INDEX_VIEW  = 'usersProfiles.index';
    const PROFILES_EDIT_VIEW  = 'usersProfiles.edit';
    

                
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(self::PROFILES_INDEX_VIEW);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $profileId = Auth::user()->user_profile_id;
        $profile = UserProfile::findOrFail($profileId);

        if (empty($profile->dni)) {
            return view(self::PROFILES_EDIT_VIEW)
            ->with('userProfile', $profile);
        } else {
            return view(self::PROFILES_INDEX_VIEW)
            ->with('user', Auth::user());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateProfileRequest $request
     * @param  int                  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request, $id)
    {
        try {
            $profile = UserProfile::findOrFail($id);
            $profile->setDni($request->dni);
            $profile->setUserType($request->userType);

            if (!empty($request->facultad)) {
                $profile->setFacultad($request->facultad);
            }

            if (!empty($request->legajo)) {
                $profile->setLegajo($request->legajo);
            }
            $profile->save();

            Session::flash('success', trans('users.profile_updated_message'));
        } catch (Exception $e) {
            Session::flash('error', trans('users.profile_not_updated_message'));
        }

        return view(self::PROFILES_INDEX_VIEW)
            ->with('user', Auth::user());;
    }
}
