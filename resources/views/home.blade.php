@extends('layouts.nav')

@section('content')
    <div class="container">
        <div class="row">
            <h1>My Blog</h1>
                <div class="col-sm pt-5">
                    <h2>Latest posts</h2>
                </div>
        </div>
        <div class="row">
            @foreach($posts as $post)
                <div class="col-sm-4">
                    <div class="card mb-3">
                        <a href="/post/{{$post->id}}"><img src="https://picsum.photos/400/200?random={{$post->id}}" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($post->create_at)->format('D M Y') }}</small></p>
                                <p class="card-text">{{ Illuminate\Support\Str::limit($post->body, $limit = 150, $end = '...') }}</p>
                                <a href="/post/{{$post->id}}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $posts->links() }}
        </div>  
@endsection
