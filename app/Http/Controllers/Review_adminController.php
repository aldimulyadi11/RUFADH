<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Produk;
use App\Users;
use DB;
class Review_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul='Data Review';
        $review=Review::all();
        $no=1;
        return view('admin.review.index',compact('judul','review','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul='Tambah Review';
        $produk=Produk::all();
        $user=Users::all();
        return view('admin.review.create',compact('judul','produk','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Review::create([
            'review_id'=>$request->review_id,
            'product_id'=>$request->product_id,
            'id_user'=>$request->id_user,
            'text'=>$request->text,
            'rating'=>$request->rating
        ]);
        return redirect('/Review_admin')->with('alert-success','Data berhasil disimpan');
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
    public function edit($review_id)
    {
        $judul='Edit Review';
        $review=DB::table('tb_review')->where('review_id',$review_id)->get();
        $produk=Produk::all();
        $user=Users::all();
        return view('admin.review.edit',compact('judul','review','produk','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $review_id)
    {
        DB::table('tb_review')->where('review_id',$review_id)->update([
            'review_id'=>$request->review_id,
            'product_id'=>$request->product_id,
            'id_user'=>$request->id_user,
            'text'=>$request->text,
            'rating'=>$request->rating
        ]);
        return redirect('/Review_admin')->with('alert-success','Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($review_id)
    {
        DB::table('tb_review')->where('review_id',$review_id)->delete();
        return redirect('/Review_admin')->with('alert-success','Data berhasil dihapus');
    }
}
