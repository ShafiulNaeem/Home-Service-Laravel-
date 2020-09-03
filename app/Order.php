<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id';
    protected $fillable = ['user_name','user_email','pro_name','pro_email','pro_wages','pro_phone','pro_adress','pro_service'];
}
