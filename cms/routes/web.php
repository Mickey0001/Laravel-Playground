<?php

use App\Post;
use App\User;
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

Route::get('/', function(){
   return view('welcome');
});

// |--------------------------------------------------------------------------
// | Raw SQL Queries
// |--------------------------------------------------------------------------

// Route::get('/insert', function(){

//   DB::insert('insert into posts (title, body, created_at, updated_at) values (?, ?)', ['Laravel rules', 'Laravel is so sexy!']);

// });

// Route::get('/read', function(){

//    $results = DB::select('select * from posts where id = ?', [1]);
//       return  dump($results);
//   //  foreach($results as $post){
//   //     return $post->body;
//   //  }

// });

// Route::get('/update', function(){
//   $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);
//   return $updated;
// });

// Route::get('/delete', function(){
//   $deleted = DB::delete('delete from posts where id = ?', [1]);
//   return $deleted; 
// });

// Route::get('/post/{id}', 'PostsController@index');

// Route::resource('posts', 'PostsController');

// Route::get('/contact', 'PostsController@contact');

// Route::get('post/{id}/{name}', 'PostsController@ShowPost');

// Route::get('/contact', function () {
//     return "Contact le Me.";
//  });

 
//  Route::get('/about', function () {
//     return "About page, this is.";
//  });
 
//  Route::get('/post/{id}/{name}', function($id, $name) {
//     return "This is a post with ID:" .$id ." " .$name;
//  });

//  Route::get('/admin/posts/example', array('as' => 'admin.home', function() {
//     $url = route('admin.home');

//     return "This is the admin URL: " .$url;
//  }));


// |--------------------------------------------------------------------------
// | ELOQUENT
// |--------------------------------------------------------------------------

// Route::get('/read', function(){

//   $posts = Post::find(2);
//   return $posts->title;

// });

// Route::get('/find', function(){

//       $post = Post::find(2);
//       return $post->title;

// });

// Route::get('/where', function(){

//     $posts = Post::where('id', 2)->orderBy('id', 'desc')->get();

//     return $posts;
// });

// Route::get('findmore', function(){

//   $posts = Post::findOrFail(2);

//   return $posts;

//   // $posts = Post::where('users_count', '<, 50')->firstOrFail();


// });

// Route::get('insert', function(){

//       $post = Post::find(1);

//       $post->title = 'New Eloquent title.';
//       $post->body = "This is pretty nice.";

//       $post->save();

// });

// Route::get('/create', function(){
//       Post::create(['title'=>'The create method!', 'body'=>'I am learning a lot about Laravel.']);
// });

// // Route::get('update', function(){
// //       Post::where('id', 3)->where('is_admin', 0)->update(['title'=>'Updated Title', 'body'=>'I still love Laravel']);
// // });

// Route::get('/delete', function(){
//       $post = Post::find(8);
//       $post->delete();
// });

// Route::get('/delete2', function(){
//       Post::destroy([14,15]);
//       // Post::where('is_admin', 0)->delete();
// });

// Route::get('/readsoftdelete', function(){
// //     $post = Post::find(1);
// //     return $post;
//       $post = Post::withTrashed()->where('is_admin', 0)->get();
//       return $post;
// });

// Route::get('/restore', function(){
//       Post::withTrashed()->where('is_admin', 1)->restore();
// });

// Route::get('/forcedelete', function(){
//       Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
// });

// |--------------------------------------------------------------------------
// | ELOQUENT RELATIONSHIPS
// |--------------------------------------------------------------------------

//One-to-one relationship
// Route::get('/user/{id}/post', function($id){
//       User::find($id)->post->title;
// });

// Route::get('/post/{id}/user', function($id){
//       return Post::find($id)->user->name;
// });

Route::get('posts', function(){
   $user =   User::find(1);
});