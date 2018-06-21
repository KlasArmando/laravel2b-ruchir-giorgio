@extends ('master')

@section('content')
    <div class="card">
        <h2>{{$album->title}}</h2>
    </div>
        <div class="card-body">
            <h2>{{$album->artist}}</h2>
        </div>
    </div>