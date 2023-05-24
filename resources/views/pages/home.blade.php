@extends('app')

@section('title', env('APP_NAME'))



@section('content')
    <img src="{{asset('/images/code.jpeg')}}" alt="code" class="rounded shadow-md h-50 mt-12">
    <h1 class="mt-5 text-3xl mb-5 sm:text-5xl text-indigo-600 font-semibold">Développement durable pour tous !</h1>
    <p class="text-lg text-gray-800">it's currently {{date('h:i A')}}</p>
@endsection
