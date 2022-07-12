<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian;
use App\Supplier;
use App\Produk;
use DB;
class Pembelian_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul='Data Pembelian';
        $pembelian=Pembelian::all();
        $no=1;
        return view('admin.pembelian.index',compact('judul','pembelian','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul='Tambah Pembelian';
        $supplier=Supplier::all();
        $produk=Produk::all();
        return view('admin.pembelian.create',compact('judul','supplier','produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pembelian::create([
            'id_pembelian'=>$request->id_pembelian,
            'id_supplier'=>$request->id_supplier,  
            'product_id'=>$request->product_id,
            'jumlah'=>$request->jumlah, 
            'harga_satuan'=>$request->harga_satuan,
            'total'=>$request->total,
        ]);

        $produk=DB::table('tb_produk')->where('product_id',$request->product_id)->first();
        $stok=$produk->stok;
        $plus=$stok+$request->jumlah;
        DB::table('tb_produk')->where('product_id',$request->product_id)->update([
            'stok'=>$plus
        ]);
        return redirect('/Pembelian_admin')->with('alert-success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return /Illuminate\Http\Response
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
    public function edit($id_pembelian)
    {
        $judul='Edit Pembelian';
        $supplier=Supplier::all();
        $produk=Produk::all();
        $pembelian=DB::table('tb_pembelian')->where('id_pembelian',$id_pembelian)->get();
        return view('admin.pembelian.edit',compact('judul','supplier','produk','pembelian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pembelian)
    {
        DB::table('tb_pembelian')->where('id_pembelian',$id_pembelian)->update([
           'id_pembelian'=>$request->id_pembelian,
           'id_supplier'=>$request->id_supplier,  
           'product_id'=>$request->product_id,
           'jumlah'=>$request->jumlah, 
           'harga_satuan'=>$request->harga_satuan,
           'total'=>$request->total,
       ]);
        return redirect('/Pembelian_admin')->with('alert-success','Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pembelian)
    {
        DB::table('tb_pembelian')->where('id_pembelian',$id_pembelian)->delete();
        return redirect('/Pembelian_admin')->with('alert-success','Data berhasil dihapus');
    }
}
