<?php

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
    
$user = Auth::user();

if($user->IsAdmin()){
    echo "user is admin";
}
});


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/admin/user/roles', ['middleware'=>'role', function(){
    return "Middleware role";
}]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
