@extends('layouts.app')

@section('content')
  <p><button class="btn btn-default"><a href="/posts">Back</a></button><br></p>
    <h2>{{$post->title}}</h2>
    <div>
      {!!$post->body!!}
    </div>
    <hr>
  <small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>
  <hr>
  <button class="btn btn-default">  <a href="/posts/{{$post->id}}/edit" >Edit post</a></button>


  {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
  {!!Form::close()!!}

  @endsection