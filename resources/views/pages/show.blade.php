@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Playlist Details</h1>
        <p><strong>Name:</strong> {{ $playlist->name }}</p>
        <p><strong>Genre:</strong> {{ $playlist->genre }}</p>
        <!-- Affichez d'autres attributs de la playlist si nécessaire -->
    </div>
@endsection