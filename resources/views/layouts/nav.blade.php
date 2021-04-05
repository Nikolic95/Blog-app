<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    	<!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>Blog</title>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">HOME</a>
                @if(Auth::user())
                    <p>{{Auth::user()->name}} {{Auth::user()->lastName}}</p>
                    <form method="POST" action="/logout">
                        @csrf
                        <input class="btn btn-outline-danger" type="submit" value="Logout">
                    </form>
                @else
                    <a href="/register">Register</a>
                    <a class="btn btn-outline-success" href="/login">Login</a>
                @endif
            </div>
        </nav>
    @yield('content')
    </div>
    </body>
</html>