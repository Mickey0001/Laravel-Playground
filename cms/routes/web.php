<?php

use App\Posts;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| CRUD Application
|--------------------------------------------------------------------------
*/

//Middleware for security
Route::group(['middleware'=>'web',], function(){
    Route::resource('posts','App\PostController@index');

    Route::get('dates', function(){
        $date = new DateTime('+ week');

        echo $date->format('m-d-y');

        echo '<br>';

        echo Carbon::now()->subMonths(5)->diffForHumans();

        echo '<br>';

        echo Carbon::now()->yesterday();
    });

    Route::get('getname', function(){
        $user = User::find(1);

        echo $user->name;
    });

    
    Route::get('setname', function(){
        $user = User::find(1);

        $user->name = 'mirzolino';

        $user->save();
    });
});