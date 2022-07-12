<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voucher;
use DB;
class Voucher_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul='Data Voucher';
        $voucher=Voucher::all();
        $no=1;
        return view('admin.voucher.index',compact('judul','voucher','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul='Tambah Voucher';
        return view('admin.voucher.create',compact('judul')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Voucher::create([
            'voucher_id'=>$request->voucher_id,
            'code'=>$request->code,
            'deskripsi'=>$request->deskripsi,
            'amount'=>$request->amount,
            'status'=>$request->status
        ]);
        return redirect('/Voucher_admin')->with('alert-success','Data berhasil ditambahkan');
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
    public function edit($voucher_id)
    {
        $judul='Edit Voucher';
        $voucher=DB::table('tb_voucher')->where('voucher_id',$voucher_id)->get();
        return view('admin.voucher.edit',compact('judul','voucher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $voucher_id)
    {
        DB::table('tb_voucher')->where('voucher_id',$voucher_id)->update([
            'voucher_id'=>$request->voucher_id,
            'code'=>$request->code,
            'deskripsi'=>$request->deskripsi,
            'amount'=>$request->amount,
            'status'=>$request->status
        ]);
        return redirect('/Voucher_admin')->with('alert-success','Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($voucher_id)
    {
        DB::table('tb_voucher')->where('voucher_id',$voucher_id)->delete();
        return redirect('/Voucher_admin')->with('alert-success','Data berhasil dihapus');
    }
}
