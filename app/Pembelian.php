<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table='tb_pembelian';
    protected $fillable=['id_pembelian','id_supplier','product_id','jumlah','harga_satuan','total'];
}
