<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'name','email','image','password','admin','adress',
    ];
    protected $hidden = [
        'password', 'remember_token','admin',
    ];

    public function isAdmin(){
        return $this->admin;
    }
    public function serviceproviders()
    {
        return $this->hasMany('App\ServiceProvider','adress');
    }
}
