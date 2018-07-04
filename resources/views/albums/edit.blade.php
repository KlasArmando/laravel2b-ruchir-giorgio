@extends('main')

@section('container')
    <div class="overview">
        <h2>Edit {{$album1->title}}</h2>
        @if ($errors->any())
            <b>Whoops!</b> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('albums.update',$album1->id) }}" method="POST">
            @csrf
            @method('PUT')
            <fieldset>
                <b>Title:</b>
                <input type="text" name="title" value="{{ $album1->title }}" class="form-control" placeholder="Title"><br>
                <b>Artist:</b>
                <input type="text" name="artist" value="{{ $album1->artist }}" class="form-control" placeholder="Artist"><br>
                <b>Description:</b>
                <input type="text" name="description" value="{{ $album1->description }}" class="form-control" placeholder="Description"><br>
            </fieldset>
            <fieldset>
                <b>Album Art:</b>
                <input type="text" name="album_art" value="{{ $album1->album_art }}" class="form-control" placeholder="Link to photo"><br>
            </fieldset>
            <fieldset>
                <b>Popularity:</b>
                <input type="text" name="popularity" value="{{ $album1->popularity }}" class="form-control" placeholder="1 - 5"><br>
                <b>Vocabulary:</b>
                <input type="text" name="vocabulary" value="{{ $album1->vocabulary }}" class="form-control" placeholder="1 - 5"><br>
                <b>Rhymes:</b>
                <input type="text" name="rhymes" value="{{ $album1->rhymes }}" class="form-control" placeholder="1 - 5"><br>
                <b>Similes:</b>
                <input type="text" name="similes" value="{{ $album1->similes }}" class="form-control" placeholder="1 - 5"><br>
                <b>Profanity:</b>
                <input type="text" name="profanity" value="{{ $album1->profanity }}" class="form-control" placeholder="1 - 5"><br>
            </fieldset>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection

@section('title')
    Edit {{$album1->title}}
@endsection