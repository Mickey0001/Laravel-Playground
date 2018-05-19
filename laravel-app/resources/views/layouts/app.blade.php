<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'Laravel')}}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
           @yield('content')
        </div>
        @if(config('app.env') == 'local')
             <script src="http://localhost:35729/livereload.js"></script>
        @endif
    </body>
</html>
