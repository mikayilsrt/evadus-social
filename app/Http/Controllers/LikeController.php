<?php

namespace App\Http\Controllers;

use App\Like;
use App\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like (Request $request) {
        $post = Post::findOrFail($request->post_id);
        $post->like()->create([
            "like"      =>  $request->like,
            "user_id"   =>  $request->user_id,
            "post_id"   =>  $request->post_id
        ]);
        /*
        if ($request->like === false) {
            $post->like()->create([
                "like"      =>  $request->like,
                "user_id"   =>  $request->user_id,
                "post_id"   =>  $request->post_id
            ]);
        } else {
            if ($request->like === true) {
                $post->like()->delete();
            }
        }*/
        return $request;
    }
}
