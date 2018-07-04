@extends('main')

@section('container')
    <div class="overview">
        <h2>Edit {{$genre->name}}</h2>
        @if ($errors->any())
            <b>Whoops!</b> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('genres.update',$genre->id) }}" method="POST">
            @csrf
            @method('PUT')
            <fieldset>
                <b>Name:</b>
                <input type="text" name="name" value="{{ $genre->name }}" class="form-control" placeholder="name"><br>
                <b>Popularity:</b>
                <input type="text" name="popularity" value="{{ $genre->popularity }}" class="form-control" placeholder="1 - 5"><br>
            </fieldset>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection

@section('title')
    Edit {{$genre->name}}
@endsection