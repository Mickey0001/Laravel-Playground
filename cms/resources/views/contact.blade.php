@extends('layouts.app')

@section('content')

        <h3>Contact Form</h3>

        @if (count($people)) 
            
            <ul>
            @foreach($people as $person)
                 <li>{{$person}}</li>
            @endforeach
            </ul>

        @endif

@endsection()