<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jasa_kirim extends Model
{
    protected $table='tb_jasa_kirim';
    protected $fillable=['id_jasa_kirim','nama_jasa_kirim'];
}
