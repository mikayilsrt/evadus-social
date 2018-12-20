<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table("posts")
            ->join("users", "posts.user_id", "=", "users.id")
            ->join("followers", "users.id", "=", "followers.following_id")
            ->where("followers.user_id", "=", Auth::id())
            ->select("posts.*", "users.*")
            ->distinct()
            ->get();
        // return $posts;
        return view('home.index')->with("posts", $posts);
    }
}
