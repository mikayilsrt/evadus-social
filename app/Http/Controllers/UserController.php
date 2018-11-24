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
        $userData = User::where("user_name", $user_name)->firstOrFail();
        return view("profile.index")->with("userData", $userData);
    }
}
