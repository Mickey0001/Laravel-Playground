<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['title', 'body'];
}
