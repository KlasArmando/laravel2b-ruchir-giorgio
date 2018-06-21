@extends('master')

@section('content')
<h1>all albums</h1>
@foreach($albums as $album)
    <div class="card">
        <div class="card-body">
                <h2>
                    <a href="{{route('albums.show' , $album->id )}}">
                        {{$album->title}}
                    </a>
                    <a href="{{route('albums.edit', $album->id)}}"> Edit</a>
                    <form method="post" action="{{route('albums.destory', $album->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </h2>
        </div>
    </div>
    @endforeach