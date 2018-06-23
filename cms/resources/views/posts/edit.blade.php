@extends('layout.app')

@section('content')
  <h1>Edit Post</h1>
  <form method="post" action="/posts">
  <input type="text" name="title" placeholder="Enter Title" value="{{$post->title}}">
    <input type="submit" name="submit">
  </form>

@endsection