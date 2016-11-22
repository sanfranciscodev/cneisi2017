<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Entities\User;
use App\Entities\UserProfile;
use App\Entities\University;
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
     * Redirect to 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if ($this->userHasNotProfile()) {
            $profile = UserProfile::create([]);
            $profile->user()->save(Auth::user());
        }

        return $this->edit();
    }

    /**
     *Check if user has a profile created
     *
     * @return bool
     */
    public function userHasNotProfile()
    {
        return (is_null(Auth::user()->user_profile_id));
            
    }
                
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(self::PROFILES_INDEX_VIEW)
        ->with('user', Auth::user());
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
        $universities = new University();

        if (empty($profile->dni)) {
            return view(self::PROFILES_EDIT_VIEW)
            ->with('userProfile', $profile)
            ->with('universities', $universities->getAll());
        } else {
            return redirect()->to(self::PROF);
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

            if (!empty($request->university_region)) {
                $profile->setUniversityRegion(
                    strtolower($request->university_region));
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
