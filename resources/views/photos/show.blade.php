@extends('layouts.app')

@section('content')
   <div class="text-center">
    <h3>{{$photo->title}}</h3>
    <p>{{$photo->description}}</p>
    <p>Size: {{$photo->size}} bytes</p>
    <a href="/albums/{{$photo->album_id}}" class="button secondary">Go Back to Album</a>
    <hr>
    <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
    <br><br>
   <form action="{{action('PhotosController@destroy', ['id' => $photo->id])}}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" value="Delete" class="button alert">
    </form>
    <br><br><br><br>
   </div> 
@endsection