@extends('main')

@section('container')
    <div class="overview">
        @foreach($genres->reverse() as $genre)
            <div class="coverart">
                {{--<a href="{{ route('albums.show',$album1->id) }}">--}}
                <a href="{{ url('/genres/'.$genre->id) }}">
                    <img class="coverimage" src="https://is2-ssl.mzstatic.com/image/thumb/Purple118/v4/d2/cf/1e/d2cf1e56-a429-c4cb-e973-c53f01176bdb/AppIcon-1x_U007emarketing-0-0-GLES2_U002c0-512MB-sRGB-0-0-0-85-220-0-0-0-9.png/246x0w.jpg">
                    <p class="covertext">{{$genre->name}}</p>
                </a>
            </div>
        @endforeach
    </div>
    @guest
        <span></span>
    @else
        <nav><ul><li><a href="{{ route('genres.create') }}">create</a></li></ul></nav>
    @endguest
@endsection

@section('title')
    Genres
@endsection