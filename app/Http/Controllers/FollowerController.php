<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowerController extends Controller
{

    public function follow (Request $request) {
        $user = User::findOrFail(Auth::id());

        if ($request->profile_id != Auth::id()) {
            if ($request->isFollowed == 1) {
                $user->followers()->attach($request->profile_id);
            } else {
                if ($request->isFollowed == 0) {
                    $user->followers()->detach($request->profile_id);
                }
            }
        }
        return $request;
    }

}
