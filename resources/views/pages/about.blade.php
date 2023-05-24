@extends('app')

@section('title', 'About Me |' . config('app.name') )


@section('content')
    <img src="{{asset('/images/mg.jpg')}}" alt="mG" class="my-12 rounded shadow-md h-50">
    <h2 class="text-gray-700" >
        Réalisé avec <span class="text-pink-500">&hearts;</span> par Matt
    </h2>
    <p class="mt-5">
        Je suis né samedi 24 Novembre 1979 à Périgueux.
        Et depuis cette date j'engrange beaucoup d'expérience dans plusieurs domaines.
    </p>
@endsection
