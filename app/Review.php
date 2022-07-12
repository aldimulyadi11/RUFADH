<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table='tb_review';
    protected $fillable=['review_id','product_id','id_user','text','rating'];
}
