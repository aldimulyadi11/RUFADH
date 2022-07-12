<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan_survei extends Model
{
    protected $table='tb_pertanyaan_survei';
    protected $fillable=['id_pertanyaan','kategori','pertanyaan'];
}
