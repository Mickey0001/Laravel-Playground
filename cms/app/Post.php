<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function show(){
        return view('show');
        
    }

    public function tags(){
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public function getPathAttribute($value){
        return $this->directory . $value;
    }

    public static function scopeLatest($query){
        return $query->orderBy('id', 'asc')->get();
    }
}
