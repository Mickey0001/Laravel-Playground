@extends('layouts.admin')

@section('content')

  <h1>Create Users</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}

    <div class="form-group">
      {!! Form::label('name', 'Name:') !!}
      {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Email:') !!}
      {!! Form::email('email', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('role_id', 'Role:') !!}
      {!! Form::select('role_id', [''=>'Choose Role'] + $roles, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('is_active', 'Status:') !!}
      {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password', 'password:') !!}
      {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', ['class'=>'form-control']) !!}
      </div>

    <div class="form-group">
      {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    </div>


  {!! Form::close() !!}



  {!! Form::open(['method'=>'DELETE', 'action'=>'AdminUsersController@destroy', $user->id]) !!}

    <div class="form-group">
      {!! Form::submit('Delete User', ['class'=>'btn btn-danger']) !!}
    </div>

  {!! Form::close() !!}

  @include('errors.error')

@endsection