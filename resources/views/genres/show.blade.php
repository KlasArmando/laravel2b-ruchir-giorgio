@extends('main')

@section('container')
    <div id="container">
        <div class="row">
            <div class="grid3">
                <p id="album_name">{{$genre->name}}</p>
            </div>
            <div class="grid7">
                <p>Populariteit</p>
                <div class="meter meter-score-{{$genre->popularity}}">
                    <div class="meter-score-bar-1"></div>
                    <div class="meter-score-bar-2"></div>
                    <div class="meter-score-bar-3"></div>
                    <div class="meter-score-bar-4"></div>
                    <div class="meter-score-bar-5"></div>
                </div>
        </div>
    </div>
    @guest
        <span></span>
    @else
        <nav>
            <ul>
                <li><a href="{{ url('genres/'.$genre->id.'/edit') }}">edit</a></li>
                <form action="{{ route('genres.destroy',$genre->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                </form>
            </ul>
        </nav>
    @endguest
@endsection

@section('title')
    {{$genre->name}}
@endsection