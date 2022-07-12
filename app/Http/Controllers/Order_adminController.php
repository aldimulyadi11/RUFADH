<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Produk;
use App\Users;
use App\Jasa_kirim;
use DB;
class Order_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul='Data Order';
        $order=Order::all();
        $no=1;
        return view('admin.order.index',compact('judul','order','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul='Tambah Order';
        $produk=Produk::all();
        $user=Users::all();
        $jasa=Jasa_kirim::all();
        return view('admin.order.create',compact('judul','produk','user','jasa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Order::create([
            'id_order'=>$request->id_order,
            'id_user'=>$request->id_user,
            'product_id'=>$request->product_id,
            'jumlah_barang'=>$request->jumlah_barang,
            'payment_method'=>$request->payment_method,
            'payment_code'=>$request->payment_code,
            'total_harga'=>$request->total_harga,
            'status_order'=>$request->status_order,
            'id_jasa_kirim'=>$request->id_jasa_kirim,
            'no_resi'=>$request->no_resi,
        ]);
        $produk=DB::table('tb_produk')->where('product_id',$request->product_id)->first();
        $jumlah=$request->jumlah_barang;
        $stok=$produk->stok;
        $sisa=$stok-$jumlah;
        DB::table('tb_produk')->where('product_id',$request->product_id)->update([
            'stok'=>$sisa,
        ]);
        return redirect('/Order_admin')->with('alert-success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_order)
    {
        $judul='Detail Order';
        $order=DB::table('tb_order')->where('id_order',$id_order)->get();
        return view('admin.order.create',compact('judul','order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_order)
    {
        $judul='Edit Order';
        $order=DB::table('tb_order')->where('id_order',$id_order)->get();
        $produk=Produk::all();
        $user=Users::all();
        $jasa=Jasa_kirim::all();
        return view('admin.order.edit',compact('judul','produk','user','order','jasa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_order)
    {
        DB::table('tb_order')->where('id_order',$id_order)->update([
            'id_order'=>$request->id_order,
            'id_user'=>$request->id_user,
            'product_id'=>$request->product_id,
            'jumlah_barang'=>$request->jumlah_barang,
            'payment_method'=>$request->payment_method,
            'payment_code'=>$request->payment_code,
            'total_harga'=>$request->total_harga,
            'status_order'=>$request->status_order,
            'id_jasa_kirim'=>$request->id_jasa_kirim,
            'no_resi'=>$request->no_resi,
        ]);
        return redirect('/Order_admin')->with('alert-success','Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_order)
    {
        DB::table('tb_order')->where('id_order',$id_order)->delete();
        return redirect('/Order_admin')->with('alert-success','Data berhasil dihapus');
    }
}
