@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>{{$album->name}}</h1>
        <a href="/" class="button secondary">Go Back</a>
        <a href="/photos/create/{{$album->id}}" class="button">Upload Photo to Album</a>
    </div>
    <hr>
@endsection