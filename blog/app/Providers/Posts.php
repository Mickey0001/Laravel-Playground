<?php

namespace App\Repositories;

class Posts

{

    public function all()

    {
      return Post::all();
    }

}