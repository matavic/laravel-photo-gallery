@extends('layouts.app')

@section('content')
    <h3>Upload Photo</h3>
<form action="{{action('PhotosController@store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="title">Title : </label>
    <input type="text" name="title" id="title" placeholder="Photo Title">

    <label for="description">Description : </label>
    <input type="text" name="description" id="description" placeholder="Photo Description">

    <label for="photo">File : </label>
    <input type="file" name="photo" id="photo">

    <input type="hidden" name="album_id" value="{{$album_id}}">

    <input type="submit" class="button" value="Upload">
</form>
@endsection