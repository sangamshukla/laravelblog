@extends('posts.app')
<form action="/posts" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="file" name="image" id="image">
    </div>
    <div>
        <input type="text" name="title" id="title">

    </div>
    <div>

        <input type="textarea" name="description" id="description">
    </div>
    <div>

        <button type="submit">Submit</button>
    </div>
</form>
