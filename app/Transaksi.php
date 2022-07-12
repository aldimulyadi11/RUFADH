<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table='tb_transaksi';
    protected $fillable=['id_transaksi','user_id','id_order','total','status'];
}
