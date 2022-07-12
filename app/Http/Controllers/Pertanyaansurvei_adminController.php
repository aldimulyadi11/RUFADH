<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan_survei;
use DB;
class Pertanyaansurvei_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul='Data Pertanyaan Survei';
        $pertanyaan=Pertanyaan_survei::all();
        $no=1;
        return view('admin.pertanyaan_survei.index',compact('judul','pertanyaan','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul='Tambah Pertanyaan';
        return view('admin.pertanyaan_survei.create',compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pertanyaan_survei::create([
            'id_pertanyaan'=>$request->id_pertanyaan,
            'kategori'=>$request->kategori,
            'pertanyaan'=>$request->pertanyaan
        ]);
        return redirect('/Pertanyaansurvei_admin')->with('alert-success','Data berhasil ditambahkan');
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
    public function edit($id_pertanyaan)
    {
        $judul='Edit Pertanyaan';
        $pertanyaan=DB::table('tb_pertanyaan_survei')->where('id_pertanyaan',$id_pertanyaan)->get();
        return view('admin.pertanyaan_survei.edit',compact('judul','pertanyaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pertanyaan)
    {
        DB::table('tb_pertanyaan_survei')->where('id_pertanyaan',$id_pertanyaan)->update([
            'id_pertanyaan'=>$request->id_pertanyaan,
            'kategori'=>$request->kategori,
            'pertanyaan'=>$request->pertanyaan
        ]);
        return redirect('/Pertanyaansurvei_admin')->with('alert-success','Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pertanyaan)
    {
        DB::table('tb_pertanyaan_survei')->where('id_pertanyaan',$id_pertanyaan)->delete();
        return redirect('/Pertanyaansurvei_admin')->with('alert-success','Data berhasil dihapus');
    }
}
