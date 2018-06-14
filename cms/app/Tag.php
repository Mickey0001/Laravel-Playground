<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
   public function posts(){
        return $this->morphByMany('App\Post', 'taggable');
   }

   public function videos(){
    return $this->morphByMany('App\Video', 'taggable');
}
}
