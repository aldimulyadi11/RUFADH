<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table='tb_user';
    protected $fillable=['user_id','username','password','nama','alamat','email','image'];
}
