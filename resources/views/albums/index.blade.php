@extends('layouts.app')

@section('content')
    <h3 class="text-center">Albums</h3>
    @if($albums)
        <?php
            $colcount = count($albums);
            $i = 1;
        ?>
        <div id="albums">
            <div class="grid-x text-center">
                @foreach($albums as $album)
                    @if($i == $colcount)
                        <div class="cell small-4 end">
                            <a href="/albums/{{$album->id}}">
                                <img src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}" class="thumbnail">
                            </a>
                            <br>
                            <h4>{{$album->name}}</h4>
                    @else
                        <div class="cell small-4 columns">
                             <a href="/albums/{{$album->id}}">
                                <img src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}" class="thumbnail">
                            </a>
                            <br>
                            <h4>{{$album->name}}</h4>
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
        <p>No Albums to display</p>    
    @endif
@endsection
