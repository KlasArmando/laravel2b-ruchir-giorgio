@extends('main')

@section('container')
    <?php
        var_dump('album1');
    ?>
    <div id="container">
        <div class="row">
            <div class="grid3">
                <img id="coverimaging" src="{{$album1->album_art}}">
                <p id="album_name">{{$album1->title}}</p>
                <p id="artist_name">van {{$album1->artist}}</p>
            </div>
            <div class="grid7">
                <p>Populariteit</p>
                <div class="meter meter-score-{{$album1->popularity}}">
                    <div class="meter-score-bar-1"></div>
                    <div class="meter-score-bar-2"></div>
                    <div class="meter-score-bar-3"></div>
                    <div class="meter-score-bar-4"></div>
                    <div class="meter-score-bar-5"></div>
                </div>
                <p>Woordenschat</p>
                <div class="meter meter-score-{{$album1->vocabulary}}">
                    <div class="meter-score-bar-1"></div>
                    <div class="meter-score-bar-2"></div>
                    <div class="meter-score-bar-3"></div>
                    <div class="meter-score-bar-4"></div>
                    <div class="meter-score-bar-5"></div>
                </div>
                <p>Rhymes</p>
                <div class="meter meter-score-{{$album1->rhymes}}">
                    <div class="meter-score-bar-1"></div>
                    <div class="meter-score-bar-2"></div>
                    <div class="meter-score-bar-3"></div>
                    <div class="meter-score-bar-4"></div>
                    <div class="meter-score-bar-5"></div>
                </div>
                <p>Vergelijkingen</p>
                <div class="meter meter-score-{{$album1->similes}}">
                    <div class="meter-score-bar-1"></div>
                    <div class="meter-score-bar-2"></div>
                    <div class="meter-score-bar-3"></div>
                    <div class="meter-score-bar-4"></div>
                    <div class="meter-score-bar-5"></div>
                </div>
                <p>Obsceniteit</p>
                <div class="meter meter-score-{{$album1->profanity}}">
                    <div class="meter-score-bar-1"></div>
                    <div class="meter-score-bar-2"></div>
                    <div class="meter-score-bar-3"></div>
                    <div class="meter-score-bar-4"></div>
                    <div class="meter-score-bar-5"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="grid10" id="album_description_wrapper">
                <p id="album_description_text">{{$album1->description}}</p>
            </div>
        </div>
    </div>
    @guest
        <span></span>
    @else
        <nav>
            <ul>
                <li><a href="{{ url('editAlbum/'.$album1->id)."/edit"  }}">edit</a></li>
                <li><a href="{{ url('/deleteAlbum') }}">delete</a></li>
            </ul>
        </nav>
    @endguest
@endsection

@section('title')
    {{$album1->title}}
@endsection