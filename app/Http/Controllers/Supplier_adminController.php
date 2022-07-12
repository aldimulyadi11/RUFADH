<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use DB;
class Supplier_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul='Data Supplier';
        $supplier=Supplier::all();
        $no=1;
        return view('admin.supplier.index',compact('judul','supplier','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul='Tambah Supplier';
        return view('admin.supplier.create',compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Supplier::create([
            'id_supplier'=>$request->id_supplier,
            'nama_supplier'=>$request->nama_supplier
        ]);
        return redirect('/Supplier_admin')->with('alert-success','Data Berhasil Ditambahkan');
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
    public function edit($id_supplier)
    {
        $judul="Edit Supplier";
        $supplier=DB::table('tb_supplier')->where('id_supplier',$id_supplier)->get();
        return view('admin.supplier.edit',compact('judul','supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_supplier)
    {
        DB::table('tb_supplier')->where('id_supplier',$id_supplier)->update([
            'id_supplier'=>$id_supplier,
            'nama_supplier'=>$request->nama_supplier
        ]);
        return redirect('/Supplier_admin')->with('alert-success','Data berhasil dirubah'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_supplier)
    {
        DB::table('tb_supplier')->where('id_supplier',$id_supplier)->delete();
         return redirect('/Supplier_admin')->with('alert-success','Data berhasil dihapus');
    }
}
