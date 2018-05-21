@extends('layouts.app')

@section('content')
  <h2>Posts</h2>
  @if(count($posts) > 0)
      @foreach($posts as $post)
        <ul class="list-group">
        <li class="list-group-item">
        <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
        </li>
        <li class="list-group-item">
          <small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>
        </li>
        </ul><br>
      @endforeach
      {{$posts->links()}}
  @else
    <p>No posts found.</p>
  @endif
@endsection