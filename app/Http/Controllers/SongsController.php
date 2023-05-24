<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongsController extends Controller
{
    public function create(Request $request)
    {
        // Validez et traitez les données de la requête POST
        $validatedData = $request->validate([
            'title' => 'required',
            'artist' => 'required',
            // Autres règles de validation pour les attributs de la chanson
        ]);

        // Créez une nouvelle instance de la chanson avec les données validées
        $song = Song::create($validatedData);

        // Redirigez ou renvoyez une réponse appropriée en fonction de vos besoins
        // ...

        // Par exemple, redirigez l'utilisateur vers une page de succès
        return redirect()->route('songs.show', ['song' => $song]);
    }

    public function update(Request $request, $songId)
    {
        // Validez et traitez les données de la requête POST pour la mise à jour de la chanson
        $validatedData = $request->validate([
            'title' => 'required',
            'artist' => 'required',
            // Autres règles de validation pour les attributs de la chanson
        ]);

        // Récupérez la chanson existante en fonction de son ID
        $song = Song::findOrFail($songId);

        // Mettez à jour les attributs de la chanson avec les données validées
        $song->update($validatedData);

        // Redirigez ou renvoyez une réponse appropriée en fonction de vos besoins
        // ...

        // Par exemple, redirigez l'utilisateur vers une page de succès
        return redirect()->route('songs.show', ['song' => $song]);
    }

    public function delete($songId)
    {
        // Récupérez la chanson existante en fonction de son ID
        $song = Song::findOrFail($songId);

        // Supprimez la chanson de la base de données
        $song->delete();

        // Redirigez ou renvoyez une réponse appropriée en fonction de vos besoins
        // ...

        // Par exemple, redirigez l'utilisateur vers une page de succès
        return redirect()->route('songs.index');
    }

    public function show($songId)
    {
        // Récupérez la chanson existante en fonction de son ID
        $song = Song::findOrFail($songId);

        // Affichez les détails de la chanson, par exemple en utilisant une vue
        return view('songs.show', ['song' => $song]);
    }

    public function index()
    {
        // Récupérez toutes les chansons de la base de données
        $songs = Song::all();

        // Affichez toutes les chansons, par exemple en utilisant une vue
        return view('songs.index', ['songs' => $songs]);
    }
}