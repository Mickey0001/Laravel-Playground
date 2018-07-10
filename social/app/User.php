<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticable;

use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticable
{
    use \Illuminate\Auth\Authenticable;
}
