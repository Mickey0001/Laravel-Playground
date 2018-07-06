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

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
        // Comment::create([
        //     'body' => $body,
        //     'post_id' =>  $this->id
        // ]);
    }
}
