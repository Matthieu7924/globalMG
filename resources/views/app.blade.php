<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', env('APP_NAME'))</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- <link rel="stylesheet" href="/public/css/app.css"> -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>
<body class="w-full min-h-screen py-6 flex flex-col justify-between items-center">

<header class="w-full max-w-6xl mx-auto px-6 bg-blue-500 fixed top-0 left-0 right-0 mb-5">
    <div class="flex justify-between items-center py-4">
        <p class="text-4xl font-bold text-white">{{ config('app.name') }}</p>

        <ul class="flex items-center">
            <li>
                <a href="{{route('home')}}" class="text-white hover:text-blue-800 px-3 py-2 rounded-lg text-sm font-medium {{ Route::is('home') ? 'bg-gray-100 text-blue-500' : '' }}">Accueil</a>
            </li>
            <li>
                <a href="{{route('about')}}" class="text-white hover:text-blue-800 px-3 py-2 rounded-lg text-sm font-medium {{ Route::is('about') ? 'bg-gray-100 text-blue-500' : '' }}">Moi</a>
            </li>
            <li>
                <a href="{{route('studies')}}" class="text-white hover:text-blue-800 px-3 py-2 rounded-lg text-sm font-medium {{ Route::is('studies') ? 'bg-gray-100 text-blue-500' : '' }}">Formation</a>
            </li>
            <li>
                <a href="{{route('hobbies')}}" class="text-white hover:text-blue-800 px-3 py-2 rounded-lg text-sm font-medium {{ Route::is('hobbies') ? 'bg-gray-100 text-blue-500' : '' }}">Hobbies</a>
            </li>
            <li>
                <a href="{{route('projects')}}" class="text-white hover:text-blue-800 px-3 py-2 rounded-lg text-sm font-medium {{ Route::is('projects') ? 'bg-gray-100 text-blue-500' : '' }}">Projets</a>
            </li>
            <li>
                <a href="{{route('music')}}" class="text-white hover:text-blue-800 px-3 py-2 rounded-lg text-sm font-medium {{ Route::is('music') ? 'bg-gray-100 text-blue-500' : '' }}">Musique</a>
            </li>
            <li>
                <a href="{{route('playlists')}}" class="text-white hover:text-blue-800 px-3 py-2 rounded-lg text-sm font-medium {{ Route::is('playlists') ? 'bg-gray-100 text-blue-500' : '' }}">Playlists</a>
            </li>
        </ul>
    </div>
</header>

<main role="main" class="flex flex-col justify-center items-center max-w-6xl mt-50">
    @yield('content')
</main>

{{--{{config('database.connections.sqlite.driver')}}--}}
{{config('project.slogan')}}

<footer>
    <p class="text-gray-400">
        &copy; Copyright {{date('Y')}} &middot;

        {{--@if(! Route::is('about'))
            <a href="{{route('about')}}" class="text-indigo-500 hover:text-indigo-600 underline">About Me</a>
        @endif
        @if(! Route::is('studies'))
        <a href="{{route('studies')}}" class="text-indigo-500 hover:text-indigo-600 underline">Studies</a>
        @endif--}}

        <a href="https://github.com/Matthieu7924"><i class="fa-brands fa-github"></i></a>

        <a href="https://www.linkedin.com/in/matthieu-garban-658708140/?originalSubdomain=fr" class="text-indigo-500 hover:text-indigo-600 underline"><i class="fa-brands fa-linkedin-in"></i></a>

    </p>
</footer>

    <!-- Scripts JavaScript -->
    @yield('scripts')
</body>
</html>
