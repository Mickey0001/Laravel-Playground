@extends('layouts.app')

@section('content')
  <h2>Posts</h2>
  @if(count($posts) > 0)
      @foreach($posts as $post)
        <div class="card">
          <div class="row">
              <div class="col-lg-8">
                <img class="img-fluid" src="/storage/cover_images/{{$post->cover_image}}" alt="uploaded image">
              </div>
              <div class="col-lg-4">
                  <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                  <small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>
              </div>
          </div>
        </div><br>
      @endforeach
      {{$posts->links()}}
  @else
    <p>No posts found.</p>
  @endif
@endsection