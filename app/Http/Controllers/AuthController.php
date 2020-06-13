<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Session::has('userid') && !Session::has('username') && !Session::has('userrole')) {
            return view('pages.signin');
        } else {
            return redirect()->to('/');
        }
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
            'email' => 'required |email',
            'password' => 'required|string|min:8|',
        ]);
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', '=', $email)
            ->where('password', '=', md5($password))
            ->first();
        if ($user) {
            Session::put('userid', $user->id);
            Session::put('name', $user->name);
            Session::put('username', $user->username);
            Session::put('userrole', $user->role);
            Session::put('userimg', $user->profile_image);

            return redirect()->to('/');
        } else {
            return redirect()->back()->with('msg', 'Wrong Email or Password');
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
    public function destroy()
    {

        session()->flush();
        return redirect()->to('signin');
    }
}
