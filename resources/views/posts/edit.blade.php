@extends('posts.app')
<form action="/posts/{{$post->id}}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <input type="text" name="title" id="title" value="{{ $post->title}}">

    </div>
    <div>

        <input type="textarea" name="description" id="description" value="{{ $post->description}}">
    </div>
    <div>

        <button type="submit">Submit</button>
    </div>
</form>
