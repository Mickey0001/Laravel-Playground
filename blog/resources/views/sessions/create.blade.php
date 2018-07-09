@extends('layout')

@section('content')

  <div class="container">

    <h1 class="text-center">Login</h1>

    <form action="Post" action="/login">

        {{ csrf_field() }}

        <div class="form-group">

            <label for="email">Email:</label>
    
            <input type="email" class="form-control" id="email" name="email">
            
        </div>
  
        <div class="form-group">
  
              <label for="password">Password:</label>
      
              <input type="password" class="form-control" id="password" name="password">
              
        </div>

        <div class="form-group">
  
           <button type="submit" class="btn btn-primary">Login</button>
            
      </div>

      @include('partials.errors')

    </form>

  </div>

@endsection