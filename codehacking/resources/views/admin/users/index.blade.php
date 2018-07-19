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

            <td><img src="/images/{{$user->photo ? $user->photo->file : 'http://via.placeholder.com/100x100'}}" alt="photo" class="img-responsive img-circle"></td>
            

        <td><a href="{{route('admin.users.edit', $user->id)}}">{{ $user->name }}</a></td>
            
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