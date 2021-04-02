<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title{{ $post->title}}</title>

    </head>
    <body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="/">HOME</a>
    
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 pt-5">
                <div class="card">
                    <div class="card-body">
                        <img src="https://picsum.photos/400/200?random={{$post->id}}" class="card-img-top" alt="...">
                        <h5 class="card-title">{{ $post->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ \Carbon\Carbon::parse($post->create_at)->format('D M Y') }}</h6>
                        <p class="card-text">{{ $post->body}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>