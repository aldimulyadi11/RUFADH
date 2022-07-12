<?php

namespace App\Http\Controllers;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use App\Admin;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul='Data Admin';
        $admin=Admin::all();
        return view('admin.admin.index',['judul'=>$judul,'admin'=>$admin,'no'=>1]);
    }

    public function profile()
    {
        $judul='Profil Admin';
        $admin=DB::table('admin')->where('id_admin',Session::get('id_admin'))->get();
        return view('admin.admin.profil',compact('judul','admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul='Tambah Admin';
        return view('admin.admin.create',compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|unique:admin|max:255',
        ]);

        if ($validator->fails()) {
            $messages=$validator->messages();
            return redirect('/TambahAdmin')
                        ->withErrors($validator);
        }
      $params = $request->all();
        $uuid1 = Uuid::uuid1();
        $file = $request->file('foto');
        $image = $file->storeAs('images', 'Admin-'.$uuid1.'.'.$file->getClientOriginalExtension());
        Admin::create([
            'id_admin'=>$request->id_admin,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>$request->password,
            'image'=>$image,
            'no_hp'=>$request->no_hp,
            'alamat'=>$request->alamat
        ]);
        return redirect('/Admin')->with('alert-success','Data Berhasil Ditambahkan');
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
    public function edit($id_admin)
    {
        $judul='Edit Admin';
        $admin=DB::table('admin')->where('id_admin',$id_admin)->get();
        return view('admin.admin.edit',compact('admin','judul'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_admin)
    {
        $uuid1 = Uuid::uuid1();
        $admin=DB::table('admin')->where('id_admin',$id_admin)->first();

        $file = $request->file('foto');
        if($file){
            $image = $file->storeAs('images', 'Admin-'.$uuid1.'.'.$file->getClientOriginalExtension());
        }else{
            $image = $admin->image;
        }
        DB::table('admin')->where('id_admin',$id_admin)->update([
            'id_admin'=>$id_admin,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>$request->password,
            'image'=>$image,
            'no_hp'=>$request->no_hp,
            'alamat'=>$request->alamat
        ]);
        return redirect('/Profil_admin')->with('alert-success','Data berhasil dirubah'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_admin)
    {
        DB::table('admin')->where('id_admin',$id_admin)->delete();
        return redirect('/Admin')->with('alert-success','Data berhasil dihapus'); 
    }
}
