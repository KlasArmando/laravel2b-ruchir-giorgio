@extends('main')

@section('container')
    <div class="overview">
        <h2>Add New Album</h2>
        @if ($errors->any())
            <b>Whoops!</b> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
        @endif
        <form action="{{ route('albums.store') }}" method="POST">
            @csrf
            <fieldset>
                <b>Title:</b>
                <input type="text" name="title" class="form-control" placeholder="Title"><br>
                <b>Artist:</b>
                <input type="text" name="artist" class="form-control" placeholder="Artist"><br>
                <b>Description:</b>
                <input type="text" name="description" class="form-control" placeholder="Description"><br>
            </fieldset>
            <fieldset>
                <b>Album Art:</b>
                <input type="text" name="album_art" class="form-control" placeholder="Link to photo"><br>
            </fieldset>
            <fieldset>
                <b>Popularity:</b>
                <input type="text" name="popularity" class="form-control" placeholder="1 - 5"><br>
                <b>Vocabulary:</b>
                <input type="text" name="vocabulary" class="form-control" placeholder="1 - 5"><br>
                <b>Rhymes:</b>
                <input type="text" name="rhymes" class="form-control" placeholder="1 - 5"><br>
                <b>Similes:</b>
                <input type="text" name="similes" class="form-control" placeholder="1 - 5"><br>
                <b>Profanity:</b>
                <input type="text" name="profanity" class="form-control" placeholder="1 - 5"><br>
            </fieldset>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection

@section('title')
    Create an album
@endsection