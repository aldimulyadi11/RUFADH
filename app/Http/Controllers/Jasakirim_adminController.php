<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jasa_kirim;
use DB;
class Jasakirim_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul='Data Jasa Kirim';
        $jasa=Jasa_kirim::all();
        $no=1;
        return view('admin.jasa_kirim.index',compact('judul','jasa','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul='Tambah Jasa kirim';
        return view('admin.jasa_kirim.create',compact('judul')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jasa_kirim::create([
            'id_jasa_kirim'=>$request->id_jasa_kirim,
            'nama_jasa_kirim'=>$request->nama_jasa_kirim
        ]);
        return redirect('/Jasakirim_admin')->with('alert-success','Data berhasil disimpan');
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
    public function edit($id_jasa_kirim)
    {
        $judul='Edit Jasa kirim';
        $jasa=DB::table('tb_jasa_kirim')->where('id_jasa_kirim',$id_jasa_kirim)->get();
        return view('admin.jasa_kirim.edit',compact('judul','jasa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_jasa_kirim)
    {
        DB::table('tb_jasa_kirim')->where('id_jasa_kirim',$id_jasa_kirim)->update([
            'id_jasa_kirim'=>$request->id_jasa_kirim,
            'nama_jasa_kirim'=>$request->nama_jasa_kirim
        ]);
        return redirect('/Jasakirim_admin')->with('alert-success','Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_jasa_kirim)
    {
        DB::table('tb_jasa_kirim')->where('id_jasa_kirim',$id_jasa_kirim)->delete();
        return redirect('/Jasakirim_admin')->with('alert-success','Data berhasil dihapus');
    }
}
