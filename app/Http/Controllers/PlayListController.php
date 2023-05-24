<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;
use App\Models\Song;

class PlaylistController extends Controller
{
    public function createPlaylist(Request $request)
    {
        // Validez et traitez les données de la requête POST
        $validatedData = $request->validate([
            'name' => 'required',
            'genre' => 'required',
            // 'playlistname' => 'required', // Ajoutez la validation pour la nouvelle colonne
            // Autres règles de validation pour les attributs de la playlist
        ]);

        // Créez une nouvelle instance de la playlist avec les données validées
        $playlist = Playlist::create($validatedData);

        // Redirigez ou renvoyez une réponse appropriée en fonction de vos besoins
        // ...

        // Par exemple, redirigez l'utilisateur vers la page "music" en incluant la variable $playlist
        return redirect()->route('playlists', ['playlist' => $playlist]);
    }


    public function updatePlaylist(Request $request, $playlistId)
    {
        // Validez et traitez les données de la requête POST pour la mise à jour de la playlist
        $validatedData = $request->validate([
            'name' => 'required',
            'genre' => 'required',
            // Autres règles de validation pour les attributs de la playlist
        ]);

        // Récupérez la playlist existante en fonction de son ID
        $playlist = Playlist::findOrFail($playlistId);

        // Mettez à jour les attributs de la playlist avec les données validées
        $playlist->update($validatedData);

        // Redirigez ou renvoyez une réponse appropriée en fonction de vos besoins
        // ...

        // Par exemple, redirigez l'utilisateur vers la page "music" en incluant la variable $playlist
        return redirect()->route('music', ['playlist' => $playlist]);
    }

    public function deletePlaylist($playlistId)
    {
        // Récupérez la playlist existante en fonction de son ID
        $playlist = Playlist::findOrFail($playlistId);

        // Supprimez la playlist de la base de données
        $playlist->delete();

        // Redirigez ou renvoyez une réponse appropriée en fonction de vos besoins
        // ...

        // Par exemple, redirigez l'utilisateur vers la page "music"
        return redirect()->route('music');
    }

    public function showPlaylist($playlistId)
    {
        // Récupérez la playlist existante en fonction de son ID
        $playlist = Playlist::findOrFail($playlistId);

        // Affichez les détails de la playlist, par exemple en utilisant une vue
        return view('pages/playlistshow', ['playlist' => $playlist]);
    }

    public function showAllPlaylists()
    {
        // Récupérez toutes les playlists de la base de données
        $playlists = Playlist::all();

        // Affichez toutes les playlists, par exemple en utilisant une vue
        return view('music', ['playlists' => $playlists]);
        
    }

    public function addSongToPlaylist(Request $request, $playlistId)
    {
        // Validez et traitez les données de la requête POST
        $validatedData = $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'playlistname' => 'required', // Ajoutez la validation pour la nouvelle colonne
            // Autres règles de validation pour les attributs de la chanson
        ]);

        // Récupérez la playlist existante en fonction de son ID
        $playlist = Playlist::find($playlistId);

        // Créez une nouvelle instance de la chanson avec les données validées
        $song = new Song($validatedData);

        // Associez la chanson à la playlist
        $playlist->songs()->save($song);

        // Redirigez ou renvoyez une réponse appropriée en fonction de vos besoins
        // ...

        // Par exemple, redirigez l'utilisateur vers une page de succès
        return redirect()->route('playlists', ['playlist' => $playlist]);
    }

    public function show($playlistId)
    {
        // Récupérez la playlist existante en fonction de son ID
        $playlist = Playlist::findOrFail($playlistId);

        // Affichez les détails de la playlist, par exemple en utilisant une vue
        return view('playlists', ['playlist' => $playlist]);
    }

    public function showAll()
    {
        $playlists = Playlist::with('songs')->get(); // Récupérer toutes les playlists avec les chansons
    
        return view('pages.playlists', compact('playlists'));    }
}