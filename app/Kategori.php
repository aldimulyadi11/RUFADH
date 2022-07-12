<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table='tb_kategori';
    protected $fillable=['category_id','nama_kategori'];
}
