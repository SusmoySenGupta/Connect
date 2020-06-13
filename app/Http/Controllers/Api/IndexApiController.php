<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexApiController extends Controller
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
}
