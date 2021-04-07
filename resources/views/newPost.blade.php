@extends('layouts.nav')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-7">
            <form method="post" action="/user/post">
            @csrf
                <div class="mb-3">
                    <label for="postTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="postTitle" name="title" value="{{ old('title') }}" required>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="postBody" class="form-label">Text</label>
                    <textarea class="form-control" id="postBody" rows="8" name="body" required>{{ old('body') }}</textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
            </div>
        </div>
    </div>
@endsection