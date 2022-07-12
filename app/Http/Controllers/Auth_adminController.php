<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;
use Illuminate\Support\Facades\Session;

class Auth_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin.login');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postlogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = Admin::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if($email==$data->email&&$password==$data->password){
                $request->session()->put('id_admin',$data->id_admin);
                $request->session()->put('username',$data->username);
                $request->session()->put('image',$data->image);
                $request->session()->put('login',TRUE);
                return redirect('/home_admin')->with('alert-success','Kamu sudah berhasil login');;
            }
            else{
                return redirect('/login_admin')->with('alert-warning','Password atau Email, Salah !');
            }
        }else{
            return redirect('/login_admin')->with('alert-warning','Password atau Email, Salah !');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/login_admin')->with('alert-success','Kamu sudah logout');
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
