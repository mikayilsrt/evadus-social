<?php

namespace App\Http\Controllers;

use App\User;

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
        $allProfileData = User::with("post.like")->where("user_name", $user_name)->first();

        // $allProfileData->followings => user qui follow
        // $allProfileData->followers => les user qui suis le user
        // return $allProfileData->followings;
        
        return view("profile.index")
            ->with("allProfileData", $allProfileData);
    }

    public function randomUser()
    {
        return User::all()
            ->random(3);
    }
}
