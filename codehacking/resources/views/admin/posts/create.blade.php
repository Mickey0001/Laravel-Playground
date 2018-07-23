@extends('layouts.admin')

@section('content')

  <h1>New Post</h1>

  {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store']) !!}

  <div class="form-group">
    {!! Form::label('title','Title:') !!}
    {!! Form::text('title', null,  ['class'=>'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
  </div>

{!! Form::close() !!}

@endsection