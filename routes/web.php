<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaylistController;
use App\Models\Playlist;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//HOME
Route::get('/', function () {
    return view('pages/home');
})->name('home');

//ABOUT
Route::get('/about', function() {
    return view('pages/about');
})->name('about');

//STUDIES
Route::get('/studies', function() {
    return view('pages/studies');
})->name('studies');

//HOBBIES
Route::get('/hobbies', function() {
    return view('pages/hobbies');
})->name('hobbies');

//PROJECTS
Route::get('/projects', function() {
    return view('pages/projects');
})->name('projects');

//MUSIC
Route::get('/music', function () {
    $playlist = Playlist::first(); // Remplacez cette ligne par la logique permettant de récupérer la playlist souhaitée
    return view('pages/music', compact('playlist'));
})->name('music');



//PLAYLISTS
//Playlists/CREATE
Route::post('/playlists', 
    [PlaylistController::class, 'createPlaylist'])
    ->name('playlists.create');

//Playlists/READ
Route::get('/playlists', 
    [PlaylistController::class, 'showAll'])
    ->name('playlists');

Route::get('/playlists/{playlistId}', 
    [PlaylistController::class, 'showPlaylist'])
    ->name('playlists.show');

//UPDATE
Route::get('/playlist.show', function() {
    return view('pages/playlistshow');
})->name('playlist.show');
    

// Route::get('/playlists', 
//     [PlaylistController::class, 'showAllPlaylists'])
//     ->name('playlists.index');

//Playlists/UPDATE --Met à jour une playlist existante
Route::put('/playlists/{playlistId}', 
    [PlaylistController::class, 'updatePlaylist'])
    ->name('playlists.update');

//Playlists/DELETE--Supprime une playlist
Route::delete('/playlists/{playlistId}', 
    [PlaylistController::class, 'deletePlaylist'])
    ->name('playlists.delete');






Route::post('/playlists/{playlistId}/songs', [
    PlaylistController::class, 'addSongToPlaylist'])
    ->name('playlists.addSong');





