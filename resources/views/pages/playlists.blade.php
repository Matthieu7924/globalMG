@extends('app')

@section('title', 'Playlists | ' . config('app.name'))

@section('content')
    <h2>Liste des playlists</h2>

    <div class="playlist-container">
        @foreach($playlists as $playlist)
            <div class="playlist-card">
                <p class="play_name">{{ $playlist->name }}</p>
                <p>{{ $playlist->description }}</p>

                <h3></h3>
                <ul>
                    @foreach($playlist->songs as $song)
                        <li>{{ $song->title }} - {{ $song->artist }}</li>
                    @endforeach
                </ul>
            <div>
                <form action="{{ route('playlists.delete', ['playlistId' => $playlist->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button">Supprimer</button>
                </form>

                <a href="{{ route('playlists.update', ['playlistId' => $playlist->id]) }}" class="update-button">Modifier</a>
                </div>
                <hr>
            </div>
        @endforeach
    </div>
@endsection


@section('scripts')
    <script>
        // Convertir le nom des playlists en majuscules
        let playlistNames = document.querySelectorAll('.play_name');
        playlistNames.forEach(function(playlistName) {
            playlistName.textContent = playlistName.textContent.toUpperCase();
        });
    </script>
@endsection