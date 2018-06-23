<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function show(){
        return view('show');
        
    }
}
