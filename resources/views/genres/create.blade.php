@extends('main')

@section('container')
    <div class="overview">
        <h2>Add New Genre</h2>
        @if ($errors->any())
            <b>Whoops!</b> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
        @endif
        <form action="{{ route('genres.store') }}" method="POST">
            @csrf
            <fieldset>
                <b>Name:</b>
                <input type="text" name="name" class="form-control" placeholder="name"><br>
                <b>Popularity:</b>
                <input type="text" name="popularity" class="form-control" placeholder="1 - 5"><br>
            </fieldset>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection

@section('title')
    Create an genre
@endsection