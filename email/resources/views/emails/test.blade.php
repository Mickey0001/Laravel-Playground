<?php

use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
   $data = [
       'title'=> 'Hi there',
       'content'=> 'Email test'
   ];
   Mail::send('emails.test', $data, function($message){
     $message->to('mirzasisic57@gmail.com', 'Mirza')->subject('Hello');
   });
});
