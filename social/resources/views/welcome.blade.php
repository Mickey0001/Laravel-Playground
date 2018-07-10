@extends('layouts.master')

@section('title')
  Social
@endsection

@section('content')
  <div class="row">

    <div class="col-md-6">
      <h3>Register</h3>
      <form action="#" method="POST">

          <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email" id="register-email">
          </div>

          <div class="form-group">
              <label for="name">Name:</label>
              <input class="form-control" type="name" name="name" id="name">
          </div>

          <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="register-password">
          </div>

          <button class="btn btn-basic" type="submit">Register</button>
      </form>
    </div>

    <div class="col-md-6">
      <h3>Login</h3>
        <form action="#" method="POST">
  
            <div class="form-group">
              <label for="email">Email:</label>
              <input class="form-control" type="email" name="email" id="login-email">
            </div>
  
            <div class="form-group">
                  <label for="password">Password:</label>
                  <input class="form-control" type="password" name="password" id="login-password">
            </div>
  
            <button class="btn btn-basic" type="submit">Login</button>
        </form>
      </div>

  </div>
@endsection