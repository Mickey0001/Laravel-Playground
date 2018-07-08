<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function __constructor()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::oldest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
    
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
    
        // //Create a new post
        // $post = new Post;

        // $post->title   = request('title');
        // $post->body = request('body');

        // //Save to DB
        // $post->save();

        // Post::create([
        //     'title' => request('title'),
        //     'body'  => request('body')
        // ]);

        // Post::create(request()->all());

        $this->validate(request(), [
            'title' => 'required',
            'body'  => 'required'
        ]);

        auth()->user()->publish(new Post(request(['title', 'body'])));

        Post::create([
            'title' => requested('title'),
            'body' => requested('body'),
            'user_id' => auth()->id()
            ]);

        //Redirect to home
        return redirect('/');
    }
}
