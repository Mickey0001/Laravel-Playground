<?php

use App\User;
use App\Address;

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

Route::get('/insert', function(){
    $user = User::findOrFail(1);

    $address = new Address(['name'=>'45 Mount Eden Road, Mount Eden, Auckland']);

    $user->address()->save($address);
});