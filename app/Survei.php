<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survei extends Model
{
    protected $table='tb_survei';
    protected $fillable=['id_survei','id_user','status','tempat_lahir','tgl_lahir','id_pertanyaan','isi_survei'];
}
