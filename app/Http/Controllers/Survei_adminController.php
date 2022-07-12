<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survei;
use App\Users;
use App\Pertanyaan_survei;
use DB;
class Survei_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul='Data Survei';
        $survei=Survei::all();
        $no=1;
        return view('admin.survei.index',compact('judul','survei','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul='Tambah Survei';
        $user=Users::all();
        $pertanyaan=Pertanyaan_survei::all();
        return view('admin.survei.create',compact('judul','user','pertanyaan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Survei::create([
            'id_survei'=>$request->id_survei,
            'id_user'=>$request->id_user,
            'status'=>$request->status,
            'tempat_lahir'=>$request->tempat_lahir,
            'tgl_lahir'=>$request->tgl_lahir,
            'id_pertanyaan'=>$request->id_pertanyaan,
            'isi_survei'=>$request->isi_survei
        ]);
        return redirect('/Survei_admin')->with('alert-success','Data berhasil ditambahkan');
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
    public function edit($id_survei)
    {
        $judul='Edit Survei';
        $survei=DB::table('tb_survei')->where('id_survei',$id_survei)->get();
        $pertanyaan=Pertanyaan_survei::all();
        $user=Users::all();
        return view('admin.survei.edit',compact('judul','survei','user','pertanyaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_survei)
    {
        DB::table('tb_survei')->where('id_survei',$id_survei)->update([
         'id_survei'=>$request->id_survei,
         'id_user'=>$request->id_user,
         'status'=>$request->status,
         'tempat_lahir'=>$request->tempat_lahir,
         'tgl_lahir'=>$request->tgl_lahir,
         'id_pertanyaan'=>$request->id_pertanyaan,
         'isi_survei'=>$request->isi_survei
     ]);
        return redirect('/Survei_admin')->with('alert-success','Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_survei)
    {
        DB::table('tb_survei')->where('id_survei',$id_survei)->delete();
        return redirect('/Survei_admin')->with('alert-success','Data berhasil dihapus');
    }
}
