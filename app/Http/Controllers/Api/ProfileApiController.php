<?php

namespace App\Http\Controllers\Api;

// use App\District;
// use App\Division;

use App\Follow;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class ProfileApiController extends Controller
{
    public function hide($post_id)
    {
        //$post_status = Post::select('status')->where('post_id','=',$post_id);

        $post = new Post();
        $post = Post::find($post_id);
        $value = 1 - $post->status;
        $post->status = $value;
        if ($post->save()) {
            return response()->json([
                'hide' => $value
            ]);
        } else {
            return response()->json([
                'hide' => false
            ]);
        }
    }

    public function follow($followingId, $userId)
    {
        //$post_status = Post::select('status')->where('post_id','=',$post_id);
        //dd($userId);
        $follow = new Follow();
        $follow = $follow->where('following_id', '=', $followingId)->where('user_id', '=', $userId)->first();
        //dd($follow);
        if ($follow) {
            $value = 1 - $follow->status;
            $follow->user_id = $userId;
            $follow->following_id = $followingId;
            $follow->status = $value;
            if ($follow->save()) {
                $followers = Follow::where('following_id', '=', $followingId)->where('status', '=', 1)->count('user_id');
                return response()->json([
                    'follow' => $value,
                    'followers' => $followers
                ]);
            } else {
                return response()->json([
                    'follow' => false
                ]);
            }
        } else {
            $follow = new Follow();
            $follow->user_id = $userId;
            $follow->follower_id = 0;

            $follow->following_id = $followingId;
            $follow->status = 1;
            if ($follow->save()) {
                $followers = Follow::where('following_id', '=', $followingId)->count('user_id');
                return response()->json([
                    'follow' => $follow->status,
                    'followers' => $followers
                ]);
            } else {
                return response()->json([
                    'follow' => false
                ]);
            }
        }

        // return response()->json([
        //     'follow' => $follow
        // ]);

        // return response()->json([
        //     'hide' => Session::get('username')
        // ]);
    }
}
