@extends('posts.app')
<form action="/posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <input type="file" name="image" id="image" value="{{$post->image_path}}">
    </div>
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
