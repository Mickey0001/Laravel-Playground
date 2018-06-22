<?php

use App\Post;
use App\Tag;
use App\Video;

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

Route::get('create', function () {

    $post = Post::create(['name'=>'My Fist post.']);

    $tag1 = Tag::find(1);
    $post->tags()->save($tag1);

    $video = Video::create(['name'=>'video.mov']);

    $tag2 = Tag::find(2);
    $video->tags()->save($tag2);
});

Route::get('read', function () {
    $post = Post::findOrFail(3);

    // return $post;
    foreach($post->tags as $tag){
        echo $tag;
    }
});

Route::get('update', function () {

    // $post = Post::findOrFail(2);

    // foreach($post->tags as $tag){
    //     return $tag->whereName('JAVA')->update(['name'=>'JavaScript']);
    // }

    $post = Post::findOrFail(1);
    $tag = Tag::find(2);

    // $post->tags()->save($tag);
    // $post->tags()->sync(1);

    $post->tags()->sync([1,2]);


});




