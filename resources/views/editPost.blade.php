@extends('layouts.nav')

@section('content')
    <div class="container">
        @if(isset($message))
            <div class="row pt-5">
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            </div>
        @endif
        <div class="row pt-5">
            <div class="col-lg-7">
            <form method="post" action="/user/post/{{ $post->id }}">
            @csrf
            @method('PUT')
                <div class="mb-3">
                    <label for="postTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="postTitle" name="title" value="{{ $post->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="postBody" class="form-label">Text</label>
                    <textarea class="form-control" id="postBody" rows="10" name="body" required>{{ $post->body }}</textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
            </div>
        </div>
    </div>
@endsection