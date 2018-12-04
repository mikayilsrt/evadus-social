<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like (Request $request) {
        // require the post by post id.
        $post = Post::findOrFail($request->post_id);

        // if the post is not liked add a new like.
        if ($request->like == 1) {
            $post->like()->create([
                "like"      =>  $request->like,
                "user_id"   =>  Auth::id(),
                "post_id"   =>  $request->post_id
            ]);
        } else {
            // if the post is liked delete the like.
            if ($request->like == 0) {
                $post->like()->delete();
            }
        }
        return "" . $request->like . "";
    }
}
