@extends('layout.app')

@section('content')

  <h1>Create Post</h1>
  <form method="post" action="/posts">
    <input type="text" name="title" placeholder="Enter Title">
    <input type="submit" name="submit">
  </form>

  @if(count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach(errors->all() as $error)
      <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  
@endsection