<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='tb_order';
    protected $fillable=['id_order','id_user','product_id','jumlah_barang','payment_method','payment_code','total_harga','status_order','id_jasa_kirim','no_resi'];
}
