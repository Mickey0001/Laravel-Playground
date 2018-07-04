@extends('layout')

@section('content')
  <div class="container">
    <h2>Create Post</h2>
    <form method="POST" action="/posts">

      {{ csrf_field() }}

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" aria-describedby="title">
      </div>

      <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control" name="content" id="content" aria-describedby="content">
      </div>

      <button type="submit" class="btn btn-primary">Publish</button>
    </form>
  </div>
@endsection()