<?php

namespace App;

class Post extends Model
{
    // //Whitelisted input fields
    protected $fillable = ['title', 'body'];

    // //Blacklisted input fields 
    // protected $guarded = ['title', 'body'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
