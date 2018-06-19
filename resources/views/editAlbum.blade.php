
<h1>Edit an album</h1>

{!! Form::open(['action' => 'AlbumController@updateAlbum', $album->id, 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', $album->title, ['class' => 'form-control', 'placeholder'=>'Title'])}}
</div>

<div class="form-group">
    {{Form::label('artist', 'Artist')}}
    {{Form::text('artist', $album->artist, ['class' => 'form-control', 'placeholder'=>'Artist'])}}
</div>

<div class="form-group">
    {{Form::label('description', 'Description')}}
    {{Form::text('description', $album->description, ['class' => 'form-control', 'placeholder'=>'Description'])}}
</div>

<div class="form-group">
    {{Form::label('album_art', 'Album Art')}}
    {{Form::text('album_art', $editAlbum->album_art, ['class' => 'form-control', 'placeholder'=>'Album Art'])}}
</div>


{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!!Form::close() !!}
