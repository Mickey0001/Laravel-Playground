<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
   public function imamgeable(){
       return $this->morphTo();
   }
}
