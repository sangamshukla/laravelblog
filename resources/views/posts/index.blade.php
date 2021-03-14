@extends('posts.app')
@section('content')

    @foreach ($data as $item)
    <div>
        <div><h1>{{ $item->title }}</h1></div>
        <div><p>{{ $item->description}}</p></div>
        <div><a href="/posts/{{$item->id}}/edit">Edit</a></div>

        <div>
            <form action="/posts/{{$item->id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    </div>

    @endforeach

    <a href="/posts/create"><p>Create New Post</p></a>
@endsection
