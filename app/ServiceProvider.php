<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    protected $table = 'serviceProvider';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','image','service_id','wages','phone','adress'];


    public function service()
    {
        return $this->belongsTo('App\Service','service_id');
    }
    public function users()
    {
        return $this->belongsTo('App\User','adress');
    }
}
