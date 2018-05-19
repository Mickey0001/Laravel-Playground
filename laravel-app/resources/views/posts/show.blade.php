@extends('layouts.app')

@section('content')
  <p><button class="btn btn-default"><a href="/posts">Back</a></button><br></p>
    <h2>{{$post->title}}</h2>
    <div>
      {{$post->body}}
    </div>
    <hr>
  <small>Posted on {{$post->created_at}}</small>
@endsection