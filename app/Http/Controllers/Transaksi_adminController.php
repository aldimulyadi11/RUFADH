<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Users;
use App\Order;
use DB;
class Transaksi_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul='Data Transaksi';
        $transaksi=Transaksi::all();
        $no=1;
        return view('admin.transaksi.index',compact('judul','transaksi','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul='Tambah Transaksi';
        $user=Users::all();
        $order=Order::all();
        return view('admin.transaksi.create',compact('judul','user','order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'id_transaksi'=>$request->id_transaksi,
            'user_id'=>$request->user_id,
            'id_order'=>$request->id_order,
            'total'=>$request->total,
            'status'=>$request->status
        ]);
        return redirect('/Transaksi_admin')->with('alert-success','Data berhasil ditambahkan');
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
    public function edit($id_transaksi)
    {
        $judul='Edit Transaksi';
        $user=Users::all();
        $order=Order::all();
        $transaksi=DB::table('tb_transaksi')->where('id_transaksi',$id_transaksi)->get();
        return view('admin.transaksi.edit',compact('judul','user','order','transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_transaksi)
    {
        DB::table('tb_transaksi')->where('id_transaksi',$id_transaksi)->update([
            'id_transaksi'=>$request->id_transaksi,
            'user_id'=>$request->user_id,
            'id_order'=>$request->id_order,
            'total'=>$request->total,
            'status'=>$request->status
        ]);
        return redirect('/Transaksi_admin')->with('alert-success','Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_transaksi)
    {
        DB::table('tb_transaksi')->where('id_transaksi',$id_transaksi)->delete();
        return redirect('/Transaksi_admin')->with('alert-success','Data berhasil dihapus');
    }
}
