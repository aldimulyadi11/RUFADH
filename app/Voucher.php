<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table='tb_voucher';
    protected $fillable=['voucher_id','code','deskripsi','amount','status'];
}
