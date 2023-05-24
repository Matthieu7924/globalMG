@extends('app')

@section('title', 'Projects |' . config('app.name') )

@section('content')
    <div class="flex">
        <div class="flex-1 max-w-sm rounded overflow-hidden shadow-lg m-4">
            <h2 class="text-gray-700 text-xl font-bold p-4">Velowash</h2>
            <img src="{{ asset('/images/velowash.jpg') }}" alt="Velowash" class="w-full project-image">
            <div class="px-6 py-4">
                <p class="text-gray-700 text-base">
                    Velowash développé en PHP et JS.
                </p>
            </div>
        </div>

        <div class="flex-1 max-w-sm rounded overflow-hidden shadow-lg m-4">
            <h2 class="text-gray-700 text-xl font-bold p-4">Hello MG</h2>
            <img src="{{ asset('/images/helloMG.jpg') }}" alt="Hello MG" class="w-full project-image">
            <div class="px-6 py-4">
                <p class="text-gray-700 text-base">
                    Hello MG développé en PHP Laravel via PHPStorm.
                </p>
            </div>
        </div>

        <div class="flex-1 max-w-sm rounded overflow-hidden shadow-lg m-4">
            <h2 class="text-gray-700 text-xl font-bold p-4">Pinterest</h2>
            <img src="{{ asset('/images/pinterest.jpg') }}" alt="Pinterest" class="w-full pinterest-image">
            <div class="px-6 py-4">
                <p class="text-gray-700 text-base">
                    Pinterest développé en PHP Symfony. Basé sur les teachers du net.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .pinterest-image {
            height: 300px; /* Ajustez la hauteur souhaitée pour l'image Pinterest */
            object-fit: cover; /* Permet de conserver le ratio de l'image et de la recadrer */
        }

        .project-image {
            height: 300px; /* Ajustez la hauteur souhaitée pour les images des projets */
            object-fit: cover; /* Permet de conserver le ratio de l'image et de la recadrer */
        }
    </style>
@endsection
