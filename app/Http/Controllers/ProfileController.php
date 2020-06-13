<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Follow;
use App\Post;
use App\Subrole;
use Carbon\Carbon;
use Session;
use Image;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $id = session()->get('userid');
        // $user = User::where('id', '=', $id)
        //     ->first();
        // $subrol = Subrole::select('name')->where('id', '=', $user->subrole_id)->first();
        // $position = $subrol->name;
        // $followers = Follow::where('user_id', '=', $id)->count('follower_id');
        // $following = Follow::where('user_id', '=', $id)->count('following_id');
        // //dd($followers);
        // return view('pages.profile', [
        //     'user' => $user,
        //     'followers' => $followers,
        //     'following' => $following,
        //     'position' =>  $position
        // ]);
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $user = User::where('username', '=', $username)->first();
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
        $post = $post->where('user_id', '=', $user->id)
            ->where('flag', '=', '1')
            ->orderByRaw('created_at DESC')
            ->get();
         //$dt = $post->created_at;
        //dd($dt->diffForHumans())  . "<br>";     // 10 days ago
        // // echo $dt->diffForHumans($past) . "<br>";             // 1 month ago
        // // echo $dt->diffForHumans($future) . "<br>";           // 1 month before
        return view('pages.profile', [
            'user' => $user,
            'followers' => $followers,
            'following' => $following,
            'isFollowing' => $isFollowing,
            'position' =>  $position,
            'posts' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if ($id == 'p1') {
            $validatedData = $request->validate([
                'profile_image' => 'image| required |mimes:jpeg,jpg,png,JPG,JPEG',
            ]);

            $originalImage = $request->file('profile_image');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath = public_path() . '/connect/images/resources/users/original/';
            //$originalPath = public_path() . '/uploads/';
            //$thumbnailImage->save($originalPath . time() . $originalImage->getClientOriginalName());
            $thumbnailImage->resize(200, 200);
            $imageName = 'profile-' . session()->get('username') . time() . '.' . $originalImage->getClientOriginalExtension();
            $thumbnailImage->save($thumbnailPath . $imageName);
            $user = new User();
            $user = User::find(session()->get('userid'));
            $user->profile_image = $imageName;
            if ($user->save()) {
                Session::put('userimg', $imageName);
                return redirect()->to('profile/' . $user->username)->with(['propic-msg'=>1]);
            }
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
