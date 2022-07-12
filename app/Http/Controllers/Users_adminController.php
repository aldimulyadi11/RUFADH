<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use DB;
use Ramsey\Uuid\Uuid;
class Users_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul='Data User';
        $user=Users::all();
        $no=1;
        return view('admin.user.index',compact('judul','user','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul='Tambah User';
        return view('admin.user.create',compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->all();
        $uuid1 = Uuid::uuid1();
        $file = $request->file('foto');
        $image = $file->storeAs('images', 'Users-'.$uuid1.'.'.$file->getClientOriginalExtension());
        Users::create([
            'user_id'=>$request->id_user,
            'nama'=>$request->nama_user,
            'username'=>$request->username,
            'email'=>$request->email,
            'alamat'=>$request->alamat,
            'password'=>$request->password,
            'image'=>$image
        ]);
        return redirect('/User_admin')->with('alert-success','Data berhasil ditambahkan');
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
    public function edit($user_id)
    {
        $judul='Edit User';
        $user=DB::table('tb_user')->where('user_id',$user_id)->get();
        return view('admin.user.edit',compact('judul','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        $uuid1 = Uuid::uuid1();
        $user=DB::table('tb_user')->where('user_id',$user_id)->first();

        $file = $request->file('foto');
        if($file){
            $image = $file->storeAs('images', 'User-'.$uuid1.'.'.$file->getClientOriginalExtension());
        }else{
            $image = $user->image;
        }
        DB::table('tb_user')->where('user_id',$user_id)->update([
            'user_id'=>$request->id_user,
            'nama'=>$request->nama_user,
            'username'=>$request->username,
            'email'=>$request->email,
            'alamat'=>$request->alamat,
            'password'=>$request->password,
            'image'=>$image
        ]);
        return redirect('/User_admin')->with('alert-success','Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
         DB::table('tb_user')->where('user_id',$user_id)->delete();
         return redirect('/User_admin')->with('alert-success','Data berhasil dihapus');
    }
}
