
    <h1>Create an album</h1>

    {!! Form::open(['action' => 'AlbumController@storeAlbum', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder'=>'Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('artist', 'Artist')}}
        {{Form::text('artist', '', ['class' => 'form-control', 'placeholder'=>'Artist'])}}
    </div>

    <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::text('description', '', ['class' => 'form-control', 'placeholder'=>'Description'])}}
    </div>

    <div class="form-group">
        {{Form::label('album_art', 'Album Art')}}
        {{Form::text('album_art', '', ['class' => 'form-control', 'placeholder'=>'Album Art'])}}
    </div>

    <div class="form-group">
        {{Form::label('popularity', 'Popularity')}}
        {{Form::text('popularity', '', ['class' => 'form-control', 'placeholder'=>'Popularity'])}}
    </div>

    <div class="form-group">
        {{Form::label('vocabulary', 'Vocabulary')}}
        {{Form::text('vocabulary', '', ['class' => 'form-control', 'placeholder'=>'Vocabulary'])}}
    </div>

    <div class="form-group">
        {{Form::label('rhymes', 'Rhymes')}}
        {{Form::text('rhymes', '', ['class' => 'form-control', 'placeholder'=>'Rhymes'])}}
    </div>

    <div class="form-group">
        {{Form::label('similes', 'Similes')}}
        {{Form::text('similes', '', ['class' => 'form-control', 'placeholder'=>'Similes'])}}
    </div>

    <div class="form-group">
        {{Form::label('profanity', 'Profanity')}}
        {{Form::text('profanity', '', ['class' => 'form-control', 'placeholder'=>'Profanity'])}}
    </div>



    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!!Form::close() !!}
