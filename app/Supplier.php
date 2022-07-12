<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table='tb_supplier';
    protected $fillable=['id_supplier','nama_supplier'];
}
