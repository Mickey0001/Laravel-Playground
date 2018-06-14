<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // protected $primaryKey = 'user_id';
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

    public function post(){
        return $this->hasOne('App\Post');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function roles(){
        return $this->belongsToMany('App\Role')->withPivot('create_at');
        //Customizing table names and columns
        // return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
    }
}
