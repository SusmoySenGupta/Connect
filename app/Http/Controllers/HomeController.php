<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use App\Follow;
Use App\Subrole;
Use App\Post;
Use DB;

class HomeController extends Controller
{

    public function index()
    {
        $user = User::where('username', '=', session()->get('username'))->first();
        $subrol = Subrole::select('name')->where('id', '=', $user->subrole_id)->first();
        $position = $subrol->name;
        $followers = Follow::where('following_id', '=', $user->id)->where('status', '=', 1)->count('user_id');
        $following = Follow::where('user_id', '=', $user->id)->where('status', '=', 1)->count('following_id');
        //dd($following);
        $isFollowing = Follow::where('user_id', '=', session()->get('userid'))
            ->where('following_id', '=', $user->id)
            ->where('status', '=', 1)
            ->first();
        //dd($isFollowing);
        $post = new Post;
        $post = $post->where('flag', '=', '1')
            ->orderByRaw('created_at DESC')
            ->get();
        $post = DB::table('posts')
            ->join('users', 'posts.user_id', 'users.id')
            ->select('posts.id', 'users.name','users.username', 'users.profile_image', 'posts.image')
            ->get();
        return view('pages.index', [
            'user' => $user,
            'followers' => $followers,
            'following' => $following,
            'isFollowing' => $isFollowing,
            'position' =>  $position,
            'posts' => $post,
        ]);
    }
}
