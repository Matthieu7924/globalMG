@extends('app')

@section('title', 'Music |' . config('app.name') )

@section('content')
    <h3>Création de playlist</h3>

    <form action="{{ route('playlists.create') }}" method="post">
        @csrf

        <label for="name">Nom de la playlist :</label>
        <input type="text" name="name" id="name" required>

        <label for="name">Genre de la playlist :</label>
        <input type="text" name="genre" id="genre" required>

        <button type="submit" class="form-button">Créer la playlist</button>
    </form>

    <hr>


    <h3>Ajout de chanson à une playlist</h3>

@if (isset($playlists) && count($playlists) > 0)
    <form action="{{ route('playlists.addSong') }}" method="post">
        @csrf

        <label for="playlistId">Sélectionnez la playlist :</label>
        <select name="playlistId" id="playlistId" required>
            @foreach ($playlists as $playlist)
                <option value="{{ $playlist->id }}">{{ $playlist->name }}</option>
            @endforeach
        </select>

        <label for="title">Titre de la chanson :</label>
        <input type="text" name="title" id="title" required>

        <label for="artist">Artiste :</label>
        <input type="text" name="artist" id="artist" required>

        <button type="submit" class="form-button">Ajouter la chanson</button>
    </form>
@else
    <p>Aucune playlist disponible.</p>
@endif


@endsection