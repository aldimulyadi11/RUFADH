<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use DB;
class Kategori_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul='Data Kategori';
        $kategori=Kategori::all();
        $no=1;
        return view('admin.kategori.index',compact('judul','kategori','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul='Tambah Kategori';
        return view('admin.kategori.create',compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kategori::create([
            'category_id'=>$request->id_kategori,
            'nama_kategori'=>$request->nama_kategori
        ]);
        return redirect('/Kategori_admin')->with('alert-success','Data berhasil disimpan');
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
    public function edit($category_id)
    {
        $judul='Edit Kategori';
        $kategori=DB::table('tb_kategori')->where('category_id',$category_id)->get();
        return view('admin.kategori.edit',compact('judul','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category_id)
    {
        DB::table('tb_kategori')->where('category_id',$category_id)->update([
            'category_id'=>$category_id,
            'nama_kategori'=>$request->nama_kategori
        ]);
        return redirect('/Kategori_admin')->with('alert-success','Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category_id)
    {
        DB::table('tb_kategori')->where('category_id',$category_id)->delete();
        return redirect('/Kategori_admin')->with('alert-success','Data berhasil dihapus');
    }
}
