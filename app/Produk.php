<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table='tb_produk';
    protected $fillable=['product_id','category_id','nama_produk','location','stok','image','price','promo','deskripsi','status'];
}
