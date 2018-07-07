@extends('layout')

@section('content')

<div class="container">

    <h1 class="text-center">Register</h1>

    <form method="POST" action="/register">

      {{ csrf_field( )}}

      <div class="form-group">

        <label for="name">Name:</label>

        <input type="text" class="form-control" id="name" name="name">

      </div>

      <div class="form-group">

          <label for="email">Email:</label>
  
          <input type="email" class="form-control" id="email" name="email">
          
      </div>

      <div class="form-group">

            <label for="password">Password:</label>
    
            <input type="text" class="form-control" id="password" name="password">
            
      </div>

      <div class="form-group">
  
          <input type="submit" class="btn btn-primary" id="submit" name="submit">
          
    </div>


    </form>

</div>

@endsection