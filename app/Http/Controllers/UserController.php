<?php

namespace App\Http\Controllers;

use App\User;
use http\Env\Response;

class UserController extends Controller
{
    /**
     * Show the application user page.
     *
     * @param $user_name
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($user_name)
    {
        $userAllData = User::where("user_name", $user_name)->firstOrFail();

        // tab for react component.
        $userData = [
            "id"            =>  $userAllData->id,
            "name"          =>  $userAllData->name,
            "profile_image" =>  $userAllData->profile_image,
            "description"   =>  $userAllData->description,
        ];

        return view("profile.index")
            ->with("userAllData", $userAllData)
            ->with("userData", json_encode($userData));
    }
}
