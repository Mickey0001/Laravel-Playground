@extends('layout')

@section('content')

<div class="container">
    <h1>
          
        {{ $post->title }}
      
    </h1>

    <p>

        {{ $post->body}}
      
    </p>
<hr>
    <div class="comments">

        <ul class="list-group">

            @foreach($post->comments as $comment)

                <li class="list-group-item">

                    <strong>

                            {{ Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}: 

                    </strong>

                    {{ $comment->body }}
                </li>

            @endforeach

        </ul>
<br>
    </div>

    <div class="card">
        <div class="card-body">
        <form method="POST" action="/posts/{{ $post->id }}/comments ">
                
            {{ csrf_field() }}

            <div class="form-group">
                    <label for="body">Comment:</label>
                    <textarea name="body" class="form-control" rows="5" id="comment"></textarea>
                  </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection