@extends('app')

@section('title', 'Détails de la playlist | ' . config('app.name'))

@section('content')
    <h2>Détails de la playlist</h2>

    <div class="playlist-details">
        <p>Nom : {{ $playlist->name }}</p>
        <p>Description : {{ $playlist->description }}</p>
        <p>Genre : {{ $playlist->genre }}</p>

        <h3>Chansons</h3>
        <ul>
            @foreach($playlist->songs as $song)
                <li>{{ $song->title }} - {{ $song->artist }}</li>
            @endforeach
        </ul>

        <div class="buttons">
            <a href="{{ route('playlists.update', ['playlistId' => $playlist->id]) }}" class="update-button">Modifier</a>

            <form action="{{ route('playlists.delete', ['playlistId' => $playlist->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button">Supprimer</button>
            </form>
        </div>
    </div>
@endsection