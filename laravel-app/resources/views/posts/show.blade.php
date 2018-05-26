@extends('layouts.app')

@section('content')
    <p><button class="btn btn-default"><a href="/posts">Back</a></button><br></p>
      <h2>{{$post->title}}</h2>
      <img class="img-fluid" src="/storage/cover_images/{{$post->cover_image}}" alt="uploaded image">
      <div>
        {!!$post->body!!}
      </div>
      <hr>
    <small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
      @if(Auth::user()->id == $post->user_id)
        <button class="btn btn-default">  <a href="/posts/{{$post->id}}/edit" >Edit post</a></button>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
      @endif
    @endif
  @endsection