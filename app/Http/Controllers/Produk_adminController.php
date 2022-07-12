<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Kategori;
use DB;
use Ramsey\Uuid\Uuid;
class Produk_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul='Data Produk';
        $produk=Produk::all();
        $no=1;
        return view('admin.produk.index',compact('judul','produk','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul='Tambah Produk';
        $kategori=Kategori::all();
        return view('admin.produk.create',compact('judul','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $uuid1 = Uuid::uuid1();
       $file = $request->file('foto');
       $image = $file->storeAs('images', 'Admin-'.$uuid1.'.'.$file->getClientOriginalExtension());
       Produk::create([
           'product_id'=>$request->product_id,
           'category_id'=>$request->category_id,
           'nama_produk'=>$request->nama_produk,
           'location'=>$request->location,
           'stok'=>$request->stok,
           'image'=>$image,
           'price'=>$request->price,
           'promo'=>$request->promo,
           'deskripsi'=>$request->deskripsi,
           'status'=>$request->status
       ]);
       return redirect('/Produk_admin')->with('alert-success','Data berhasil ditambahkan');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
      $judul='Detail Produk';
      $produk=DB::table('tb_produk')->where('product_id',$product_id)->get();
      foreach($produk as $x){
            $x ->category_id;
        }
      $kategori=DB::table('tb_kategori')->where('category_id',$x->category_id)->get();
      return view('admin.produk.detail',compact('judul','produk','kategori'));
  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        $judul='Edit Produk';
        $produk=DB::table('tb_produk')->where('product_id',$product_id)->get();
         foreach($produk as $x){
            $x ->category_id;
        }
      $kategori=DB::table('tb_kategori')->where('category_id',$x->category_id)->get();
        return view('admin.produk.edit',compact('judul','produk','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
     $uuid1 = Uuid::uuid1();
     $produk=DB::table('tb_produk')->where('product_id',$product_id)->first();

     $file = $request->file('foto');
     if($file){
        $image = $file->storeAs('images', 'Produk-'.$uuid1.'.'.$file->getClientOriginalExtension());
    }else{
        $image = $produk->image;
    }
    DB::table('tb_produk')->where('product_id',$product_id)->update([
        'product_id'=>$product_id,
        'category_id'=>$request->category_id,
        'nama_produk'=>$request->nama_produk,
        'location'=>$request->location,
        'stok'=>$request->stok,
        'image'=>$image,
        'price'=>$request->price,
        'promo'=>$request->promo,
        'deskripsi'=>$request->deskripsi,
        'status'=>$request->status
    ]);
    return redirect('/Produk_admin')->with('alert-success','Data berhasil dirubah');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        DB::table('tb_produk')->where('product_id',$product_id)->delete();
        return redirect('/Produk_admin')->with('alert-success','Data berhasil dihapus');
    }
}
