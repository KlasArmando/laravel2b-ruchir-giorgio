@extends('main')

@section('container')
    <div class="overview">
        @foreach($album1s->reverse() as $album1)
            <div class="coverart">
                <a href="{{ route('albums.show',$album1->id) }}">
                    <img class="coverimage" src="{{$album1->album_art}}">
                    <p class="covertext">{{$album1->title}}</p>
                </a>
            </div>
        @endforeach
    </div>
    @guest
        <span></span>
    @else
        <nav><ul><li><a href="{{ route('albums.create') }}">create</a></li></ul></nav>
    @endguest
@endsection

@section('title')
    Albums
@endsection