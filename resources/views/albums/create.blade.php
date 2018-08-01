@extends('layouts.app')

@section('content')
    <h3>Create Album</h3>
<form action="{{action('AlbumsController@store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name">Name : </label>
    <input type="text" name="name" id="name" placeholder="Album Name">

    <label for="description">Description : </label>
    <input type="text" name="description" id="description" placeholder="Album Description">

    <label for="cover_image">File : </label>
    <input type="file" name="cover_image" id="cover_image">

    <input type="submit" value="Create">
</form>
@endsection