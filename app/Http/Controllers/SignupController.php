<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Session;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Session::has('userid') && !Session::has('username') && !Session::has('userrole')) {
            return view('pages.register');
        } else {
            return redirect()->back();
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
            'name' => 'required|max:255|regex:/^(?=.*?[a-zA-Z])/s',
            'username' => 'required|max:20|unique:users,username',
            'email' => 'required |email|unique:users,email',
            'nid' => 'required |min:15|max:15|unique:users,nid|regex:/^(?=.*?[0-9])/',
            'phone_no' => 'required |min:11|max:11|unique:users,phone_no|regex:/^(?=.*?[0-9])/',
            'gender_code' => 'required |regex:/^(?=.*?[1-3])/',
            'address' => 'required|max:1000',
            'birth_date' => 'required | date| after :1970-12-31| before: 1998-12-31  ',
            'password' => 'required|string|min:8|',
            'confirm_password' => 'required|same:password'
        ]);
        //dd($request);
        //regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->nid = md5($request->nid);
        $user->phone_no = $request->phone_no;
        $user->gender_code = $request->gender_code;
        $user->address = $request->address;
        $user->birth_date = $request->birth_date;
        $user->password = md5($request->password);
        $user->profile_image = 'default-' . $request->gender_code . '.png';

        if ($user->save()) {
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
            }
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
    { }
}
//FOREIGN KEY (PersonID) REFERENCES Persons(PersonID)
