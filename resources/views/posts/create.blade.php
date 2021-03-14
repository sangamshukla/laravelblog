@extends('posts.app')
<form action="/posts" method="post">
    @csrf
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
