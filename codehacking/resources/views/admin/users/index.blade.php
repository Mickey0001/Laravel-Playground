@extends('layouts.admin')

@section('content')

<h1>Users</h1>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Photo</th>
      <th>Name</th> 
      <th>Email</th>
      <th>Role</th>
      <th>Active</th>
      <th>Created</th>
      <th>Updated</th>
    </tr>
  </thead>
  <tbody>

    @if($users)

      @foreach($users as $user)

        <tr>
            <td>{{ $user->id }}</td>

            <td><img height="50px" width="50px" src="/images/{{ $user->photo ? $user->photo->file : 'no photo for this user'}}" alt="photo"></td>

            <td>{{ $user->name }}</td>
            
            <td>{{ $user->email }}</td>

            <td>{{ $user->role->name }}</td>

            <td>{{ $user->is_active == 1 ? 'Yes' : 'No' }}</td>

            <td>{{ $user->created_at->difFforHumans() }}</td>

            <td>{{ $user->updated_at->difFforHumans() }}</td>
        </tr>

      @endforeach
  
    @endif

  </tbody>
</table>

@endsection