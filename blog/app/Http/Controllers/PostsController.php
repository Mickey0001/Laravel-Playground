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
        $posts = Post::latest();

        if ($month = request('month')) {
            $posts->whereMonth('created_at', 5);
        }

        if ($year = request('year')) {
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')->groupBy('year', 'month')->orderByRaw(min('created_at', 'desc'))->get()->toArray();

        return view('posts.index', compact('posts', 'archives'));
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

        $this->validate(request(), [
            'title' => 'required',
            'body'  => 'required'
        ]);

        auth()->user()->publish(new Post(request(['title', 'body'])));

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
            ]);

        //Redirect to home
        return redirect('/');
    }
}
