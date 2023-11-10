<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserInfo;

class UserInfoController extends Controller
{
    public function getUserInfo(Request $request)
    {
        $userId = $request->input('userId');

        $profile = UserInfo::where('user_id', $userId)->first();

        if ($profile) {
            return response()->json($profile);
        } else {
            return response()->json(['error' => 'Profile not found'], 404);
        }
    }

    public function updateUserInfo(Request $request)
    {
        $profileId = $request->input('profileId');
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $description = $request->input('description');

        $profile = UserInfo::where('user_id',$profileId)->first();

        if($profile){
            $profile->first_name = $firstName;
            $profile->last_name = $lastName;
            $profile->description = $description;
            $profile->save();
            return response()->json($profile);
        } else {
            return response()->json(['error' => 'Profile not found'], 404);
        }
    }
}
