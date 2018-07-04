<?php

use App\Task;

Route::get('/', 'PostsController@index');

Route::get('posts/{post}', 'PostsController@create');

