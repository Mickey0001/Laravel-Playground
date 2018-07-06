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
        <div class="card-block">
        <form method="POST" action="/posts/{{ $post->/comments }}">
                <div class="form-group">
                    <textarea name="body" id="body" placeholder="Add your comment" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection