@extends ('master')

@section('content')

    <form action="{{route('albums.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" >
            <label for="artist">Artist</label>
            <input type="text" name="artist" id="artist">
            <label for="genre">Genre</label>
            <input type="text"  name="genre"    id="genre">
            <button type="submit">Add an album</button>

    </form>
    @endsection
