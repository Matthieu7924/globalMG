@extends('app')

@section('title', 'Hobbies |' . config('app.name') )

@section('content')
    <div class="container">
        <div class="my-12 w-full flex bg-opacity">
            <img src="{{asset('/images/cassettes.jpeg')}}" alt="cassettes" class="rounded shadow-md h-48 w-48 mx-5">
            <div class="flex flex-col justify-between w-1/2 mx-5">
                <h2 class="text-gray-700">
                    L'important c'est l'essentiel et ça c'est primordial!
                </h2>
                <p class="mt-5">
                    La musique est ma drogue et **** est mon dealer. J'ai surnomé ma femme Soimayme car on est jamais mieux servi que par soi même sinon tout vient à point quand t'avais demandé saignant 
                </p>
            </div>
        </div>

        <div class="my-12 w-full flex bg-opacity">
            <img src="{{asset('/images/martinDupont.jpeg')}}" alt="MartinDupont" class="rounded shadow-md h-48 w-48 mx-5">
            <div class="flex flex-col justify-between w-1/2 mx-5">
                <h2 class="text-gray-700">
                    Martin Dupont
                </h2>
                <p class="mt-5">
                    Un blase bien classique par contre la zic pas très traditionnelle. Avant d'aller prescrire des médicaments le futur Doc était Dj new wave, ça faisait du bien et c'était même pas remboursé par la sécu.
                </p>
            </div>
        </div>

        <div class="my-12 w-full flex bg-opacity">
            <img src="{{asset('/images/generationals.jpeg')}}" alt="generationals" class="rounded shadow-md h-48 w-48 mx-5">
            <div class="flex flex-col justify-between w-1/2 mx-5">
                <h2 class="text-gray-700">
                    Generationals
                </h2>
                <p class="mt-5">
                    Les 2 Néo-Orléanais ont sorti plusieurs albums très sympas depuis la fin des années 2000. Un peu originaux sur les bords et très très décontractés, bref ambiance sereine garantie.
                </p>
            </div>
        </div>

        <div class="my-12 w-full flex bg-opacity">
            <img src="{{asset('/images/radiateur.jpg')}}" alt="dude" class="rounded shadow-md h-48 w-48 mx-5">
            <div class="flex flex-col justify-between w-1/2 mx-5">
                <h2 class="text-gray-700">
                    Au fond près du radiateur
                </h2>
                <p class="mt-5">
                    Le bon son c'est comme le vélo, ça s'oublie pas. Les bidons veulent le guidon laissez les donc qu'ils se cassent les dents aidons les boum dedans.
                </p>
            </div>
        </div>

        <div class="my-12 w-full flex bg-opacity">
            <img src="{{asset('/images/dude.jpeg')}}" alt="dude" class="rounded shadow-md h-48 w-48 mx-5">
            <div class="flex flex-col justify-between w-1/2 mx-5">
                <h2 class="text-gray-700">
                    Le Dude
                </h2>
                <p class="mt-5">
                    J'adore les aventuriers. Et dans le classement des plus intrépides, le Dude est très mal classé mais je le vénère. Il réalise toutes ses cascades lui même. il est incroyable dans tout ce qu'il entreprend.
                </p>
            </div>
        </div>


        <div class="my-12 w-full flex bg-opacity">
            <img src="{{asset('/images/lords.jpeg')}}" alt="dude" class="rounded shadow-md h-48 w-48 mx-5">
            <div class="flex flex-col justify-between w-1/2 mx-5">
                <h2 class="text-gray-700">
                    Les Lords
                </h2>
                <p class="mt-5">
                    Six notes pour bien se prendre la tête, enfin un truc entêtant...envoutant, bref ça suffit, pas la peine d'en rajouter!
                </p>
            </div>
        </div>


@endsection
