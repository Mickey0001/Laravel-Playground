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

Route::get('/', function(){
   return view('welcome');
});

// |--------------------------------------------------------------------------
// | Raw SQL Queries
// |--------------------------------------------------------------------------

// Route::get('/insert', function(){

//   DB::insert('insert into posts (title, body, created_at, updated_at) values (?, ?)', ['PHP Laravel', 'Laravel is the best PHP framework!']);

// });

// Route::get('/read', function(){

//    $results = DB::select('select * from posts where id = ?', [1]);
//       return  dump($results);
//   //  foreach($results as $post){
//   //     return $post->body;
//   //  }

// });

Route::get('/update', function(){
  
});




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

