@extends('main')

@section('container')
    <div class="overview">
        @foreach($album->reverse() as $albums)
            <div class="coverart">
                <a href="{{ url('/album/'.$albums->id)}}">
                    <img class="coverimage" src="{{$albums->album_art}}">
                    <p class="covertext">{{$albums->title}}</p>
                </a>
            </div>
        @endforeach
    </div>
    @guest
        <span></span>
    @else
        <nav><ul><li><a href="{{ url('/createAlbum') }}">create</a></li></ul></nav>
    @endguest
@endsection

@section('title')
    Albums
@endsection
