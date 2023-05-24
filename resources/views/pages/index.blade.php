@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Playlists</h1>
        <ul>
            @foreach ($playlists as $playlist)
                <li><a href="{{ route('playlists.show', ['playlistId' => $playlist->id]) }}">{{ $playlist->name }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection