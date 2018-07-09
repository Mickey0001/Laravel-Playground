<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    public function comments()

    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body)

    {
        $this->comments()->create(compact('body'));
    }

    public function scopeFilter($query, $filters)

    {
        if ($month = $filters['month']) 

        {
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }



        if ($year = $filters['year']) 

        {
            $posts->whereYear('created_at', $year);
        }
    }
}
