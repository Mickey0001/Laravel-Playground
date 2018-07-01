<?php

use Illuminate\Support\Facades\Mail;

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
Route::get('/email', function () {
    $data = [
        'title'=> 'Hello to myself',
        'content'=> 'Sending email from Laravel, usign MailGun'
    ];
    Mail::send('emails.test', $data, function($message){
      $message->to('mirzasisic57@gmail.com', 'Mirza')->subject('Hello');
    });
 });
