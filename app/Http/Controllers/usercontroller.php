<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\admin;
use Validator;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return User::all();
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function signin(Request $req){
        $username = $req->input('username');
        $password = $req->input('password');

        $check = DB::table('admins')
        ->where(['username'=>$username,'password'=>$password])
        ->get();
        if(count($check)>0){
            return view('admin.dashboard');
        }
        else{
            return view('login_page.login_admin');
        }
    }
    public function create()
    {
        /*
        $anggota = DB::table('admins')
        ->get();
        return view('home', compact('admins'));
        */
        $user = DB::table('users')
        ->get();
        return view('login_page.register', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $usernameadmin = $request->username;
        $passwordadmin = $request->password;
        $namaadmin = $request->name;

        DB::table('admins')->insert(
            [
                'username' => $usernameadmin,
                'password' => $passwordadmin,
                'name' => $namaadmin,
            ]
        );
        return response()->json(['success' => 'Berhasil']);
        */

        $nama = $request->nama;
        $email = $request->email;
        $username = $request->username;
        $password = $request->password;
        $u_role = $request->user_role;
        $p_img = $request->prof_img;

        DB::table('users')->insert(
            [
                'name' => $nama,
                'email' => $email,
                'profile_image' => $p_img,
                'status' => $u_role,
                'email_verified_at' => null,
                'password' => bcrypt($password),
                'remember_token' => null
            ]
        );

        return view('login_page.notification');
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
