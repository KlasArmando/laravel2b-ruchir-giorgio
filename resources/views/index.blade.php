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
@endsection

@section('title')
    Home
@endsection