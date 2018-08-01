@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>{{$album->name}}</h1>
        <a href="/" class="button secondary">Go Back</a>
        <a href="/photos/create/{{$album->id}}" class="button">Upload Photo to Album</a>
    </div>
    <hr>
        <h3 class="text-center">Photos</h3>
    @if(count($album->photos) > 0)
        <?php
            $colcount = count($album->photos);
            $i = 1;
        ?>
        <div id="photos">
            <div class="grid-x text-center">
                @foreach($album->photos as $photo)
                    @if($i == $colcount)
                        <div class="cell small-4 end">
                            <a href="/photos/{{$photo->id}}">
                            <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}" class="thumbnail">
                            </a>
                            <br>
                            <h4>{{$photo->title}}</h4>
                    @else
                        <div class="cell small-4 columns">
                             <a href="/photos/{{$photo->id}}">
                            <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}" class="thumbnail">
                            </a>
                            <br>
                            <h4>{{$photo->title}}</h4>
                    @endif
                    @if($i % 3 == 0)
                        </div></div><div class="grid-x text-center">
                    @else
                        </div>        
                    @endif
                    <?php $i++; ?>
                @endforeach    
            </div>
                    
        </div>
    @else
        <p class="text-center">Album without Photos</p>    
    @endif
@endsection