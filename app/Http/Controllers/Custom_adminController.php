<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom;
use App\Produk;
use DB;
class Custom_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul='Data Custom';
        $custom=Custom::all();
        $no=1;
        return view('admin.custom.index',compact('judul','custom','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul='Tambah Custom';
        $produk=Produk::all();
        return view('admin.custom.create',compact('judul','produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Custom::create([
            'id_custom'=>$request->id_custom,
            'product_id'=>$request->product_id,
            'description'=>$request->description,
        ]);
        return redirect('/Custom_admin')->with('alert-success','Data berhasil ditambahkan');
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
    public function edit($id_custom)
    {
        $judul='Edit Custom';
        $custom=DB::table('tb_custom')->where('id_custom',$id_custom)->get();
        $produk=Produk::all();
        return view('admin.custom.edit',compact('judul','custom','produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_custom)
    {
        DB::table('tb_custom')->where('id_custom',$id_custom)->update([
            'id_custom'=>$request->id_custom,
            'product_id'=>$request->product_id,
            'description'=>$request->description,
        ]);
        return redirect('/Custom_admin')->with('alert-success','Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_custom)
    {
        DB::table('tb_custom')->where('id_custom',$id_custom)->delete();
        return redirect('/Custom_admin')->with('alert-success','Data berhasil dihapus');
    }
}
