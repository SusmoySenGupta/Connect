<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Image;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $validatedData = $request->validate([
            'post_image' => 'image|required|mimes:jpeg,jpg,png,JPG,JPEG',
            'caption' => 'required',
            'user_id' => 'required',

        ]);
        //dd($validatedData);
        $originalImage = $request->file('post_image');
        //dd($originalImage);
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path() . '/connect/images/resources/users/original/posts/';
        $imageName = 'post-' . session()->get('username') . time() . '.' . $originalImage->getClientOriginalExtension();
        $thumbnailImage->save($thumbnailPath . $imageName);
        $post = new Post();
        $post->user_id = $request->user_id;
        $post->image = $imageName;
        $post->caption = $request->caption;
        if ($post->save()) {
            return redirect()->back()->with(['post-msg'=>1]);
        } else {
            return redirect()->back()->with(['post-msg'=>0]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
