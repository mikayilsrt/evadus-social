<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowerController extends Controller
{

    public function follow (Request $request) {
        $user = User::findOrFail($request->user_id);

        if ($request->user_id != Auth::id()) {
            if ($request->isFollowed == 1) {
                $user->follow()->create([
                    "user_id"       =>  Auth::id(), // follower_id
                    "following_id"  =>  $request->user_id
                ]);
            } else {
                if ($request->isFollowed == 0) {
                    $user->follow()->delete();
                }
            }
        }
        return $request;
    }

}
