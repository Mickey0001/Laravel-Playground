@extends('layouts.admin')

@section('content')

  <h1>Edit User</h1>

    <div class="col-sm-3">
    <img src="{{$user->photo ? $user->photo->file : 'http://via.placeholder.com/100x100'}}" alt="photo" class="img-responsive img-circle">
    </div> 

    <div class="col-sm-9">

        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}

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
          {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
        </div>
    
        <div class="form-group">
          {!! Form::label('is_active', 'Status:') !!}
          {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class'=>'form-control']) !!}
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

      
    
      @include('errors.error')
      
    </div>



@endsection