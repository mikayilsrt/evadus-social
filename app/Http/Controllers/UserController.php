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

        return view("profile.index")
            ->with("allProfileData", $allProfileData);
    }
}
