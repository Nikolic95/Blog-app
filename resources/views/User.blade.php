
@extends('layouts.nav')

@section('content')
    <div class="container">
        @if (\Session::has('message'))
            <div class="alert alert-success">
                {{\Session::get('message')}}
            </div>
        @endif
        <div class="col-sm pt-5">
            <a href="/user/post/new" class="btn btn-outline-primary">New</a>
        </div>
        <div class="row pt-5">
            <div class="col-md-7">
                <ul class="list-group">
                    @foreach($posts as $post)
                        <li class="list-group-item ">{{ $post->title }} 
                            <div class="d-grid gap-1 col-1 mx-auto float-end">
                                <a href="/user/post/edit/{{ $post->id }}" class="list-group-item list-group-item-action btn btn-success btn-primary">Edit</a>
                                <form method="POST" action="/user/post/{{ $post->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <input class="list-group-item list-group-item-action btn btn-danger btn-primary" type="submit" value="Delete">
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection