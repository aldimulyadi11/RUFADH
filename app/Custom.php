<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custom extends Model
{
    protected $table='tb_custom';
    protected $fillable=['id_custom','product_id','description'];
}
