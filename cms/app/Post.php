<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['title', 'body'];

    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
