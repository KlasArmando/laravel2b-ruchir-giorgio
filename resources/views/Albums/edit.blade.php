@extends ('master')

@section('content')
    <h2>Update</h2>
    <form action="{{route('albums.update', $album->id)}}" method="post">
        @csrf
        @method('put)')
        <div class="form-group">
            <label for="title" >Title</label>
            <input type="text" name="title" id="title" value='{{$album->title}}'>
            <label for="artist">Artist</label>
            <input type="text" name="artist" id="artist" value='{{$album->album}}'>
            <label for="genre">Genre</label>
            <input type="text"  name="genre"    id="genre"  value='{{$album->genre}}'>
            <button type="submit">Update an album</button>

    </form>
@endsection
