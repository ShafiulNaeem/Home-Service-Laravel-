<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';
    protected $primaryKey = 'id';
    protected $fillable = ['service_type','service_info','image','labour_id'];


    public function serprovider()
    {
        return $this->hasMany('App\ServiceProvider','service_id','id');
    }


}
