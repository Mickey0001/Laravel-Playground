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
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function photos(){
        return $this->morphToMany('App\Photo', 'imageable');
    }
    
    public function getNameAttribute($value){
        return strtoupper($value);
    }

    public function setNameAttribute($value){
        $this->attributes['name'] = strtoupper($value);
    }
    
}

