    @extends('layouts.app')
    @section('title',"Netflix Clone")

    @section('contenu')

    <section class="main-container " >
        <div class="text-center">
            <h1> Affichage de personne</h1>
            </div>

        <div class="flex flex-row ">

            <h2 class="text-3xl w-10/12" id="home">Tous les personnes</h2>

            <a class="flex flex-row text-black bg-red bg-red-600 rounded-lg border border-red-950 hover:text-2xl focus:text-2xl hover:bg-red-700  font-medium px-5" href="{{route('Personnes.create')}}">
                <svg class="m-auto mr-2 w-[14px] h-[14px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
                <h6 class="mt-1">Nouvelle Personne</h6>
            </a>
        </div>
        <div class="flex flex-row overflow-x-auto">
            @if($personnes->count() > 0)
                @foreach($personnes as $personne)
                    <div class="rounded-lg bg-black w-48">
                        <a href="{{route('Personnes.show',$personne)}}">
                        <div class="flex flex-col items-center py-10">
                                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="img\Personnes\{{$personne->urlphoto}}" alt="{{$personne->urlphoto}}"/>
                                <h5 class="indent-0 mb-1 text-xl font-medium text-gray-900">{{$personne->prenom}} {{ $personne->nom}}</h5>
                                <span class="text-sm text-gray-500">{{ $personne->role}}</span>
                        </div>
                        </a>
                    </div>
                @endforeach
            @else
                <h1>Aucune personne</h1>
            @endif
        </div>
            <h2 class="text-3xl w-2/12" id="home">Tous les acteurs</h2>
        <div class="flex flex-row overflow-x-auto">

            @if($personnesActeurs->count() > 0)
                @foreach($personnesActeurs as $personne)
                    <div class="rounded-lg bg-black w-48">
                        <a href="{{route('Personnes.show',$personne)}}">
                            <div class="flex flex-col items-center py-10">
                                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="img\Personnes\{{$personne->urlphoto}}" alt="{{$personne->urlphoto}}"/>
                                <h5 class="indent-0 mb-1 text-xl font-medium text-gray-900">{{$personne->prenom}} {{ $personne->nom}}</h5>
                                <span class="text-sm text-gray-500">{{ $personne->role}}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <h1>Aucun Acteur</h1>
            @endif
        </div>
        <h2 class="text-3xl w-2/12" id="home">Tous les réalisateurs</h2>
        <div class="flex flex-row overflow-x-auto">
                @if($personnesRealisateurs->count() > 0)
                    @foreach($personnesRealisateurs as $personne)
                        <div class="rounded-lg bg-black w-48">
                            <a href="{{route('Personnes.show',$personne)}}">
                                <div class="flex flex-col items-center py-10">
                                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="img\Personnes\{{$personne->urlphoto}}" alt="{{$personne->urlphoto}}"/>
                                    <h5 class="indent-0 mb-1 text-xl font-medium text-gray-900">{{$personne->prenom}} {{ $personne->nom}}</h5>
                                    <span class="text-sm text-gray-500">{{ $personne->role}}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <h1>Aucun réalisateur</h1>
                @endif
            </div>
        <h2 class="text-3xl w-2/12" id="home">Tous les producteurs</h2>
        <div class="flex flex-row overflow-x-auto">
                @if($personnesProducteurs->count() > 0)
                    @foreach($personnesProducteurs as $personne)
                        <div class="rounded-lg bg-black w-48">
                            <a href="{{route('Personnes.show',$personne)}}">
                                <div class="flex flex-col items-center py-10">
                                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="img\Personnes\{{$personne->urlphoto}}" alt="{{$personne->urlphoto}}"/>
                                    <h5 class="indent-0 mb-1 text-xl font-medium text-gray-900">{{$personne->prenom}} {{ $personne->nom}}</h5>
                                    <span class="text-sm text-gray-500">{{ $personne->role}}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <h1>Aucun producteur</h1>
                @endif
            </div>
        <h2 class="text-3xl w-2/12" id="home">Tous les femmes</h2>
        <div class="flex flex-row overflow-x-auto">
                @if($personnesFemmes->count() > 0)
                    @foreach($personnesFemmes as $personne)
                        <div class="rounded-lg bg-black w-48">
                            <a href="{{route('Personnes.show',$personne)}}">
                                <div class="flex flex-col items-center py-10">
                                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="img\Personnes\{{$personne->urlphoto}}" alt="{{$personne->urlphoto}}"/>
                                    <h5 class="indent-0 mb-1 text-xl font-medium text-gray-900">{{$personne->prenom}} {{ $personne->nom}}</h5>
                                    <span class="text-sm text-gray-500">{{ $personne->role}}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <h1>Aucune Femme</h1>
                @endif
            </div>
        </section>
    @endsection
