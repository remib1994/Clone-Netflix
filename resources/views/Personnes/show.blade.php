    @extends('layouts.app')
    @section('title',"Netflix Clone")

    @section('contenu')

    <section class="main-container " >

        <div class="text-center w-3/12 mx-auto">
            <h1> Affichage de {{$personne->prenom}} {{$personne->nom}}</h1>
            <div class="rounded-lg bg-black">
                <div class="flex justify-end px-4 pt-4 ">

                </div>
                <div class="flex flex-col items-center py-10">

                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{asset('img/Personnes/'.$personne->urlphoto)}}" alt="{{$personne->urlphoto}}"/>
                    <h5 class="indent-0 mb-1 text-xl font-medium text-gray-900 dark:text-red-900 ">{{$personne->prenom}} {{ $personne->nom}}</h5>
                    <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  mb-2">
                    <div class="grid grid-rows-4 grid-cols-2 ">
                        <p class="text-end text-gray-500">Rôle : </p>
                        <p class="text-left pl-2">{{ $personne->role}}</p>
                        <p class=" text-end text-gray-500">date de naissance : </p>
                        <p class="text-left pl-2">{{ $personne->date_naissance}}</p>
                        <p class="text-end text-gray-500">Nationalité : </p>
                        <p class="text-left pl-2">{{ $personne->nationalite}}</p>
                        <p class="text-end text-gray-500">Sexe : </p>
                        <p class="text-left pl-2">{{ $personne->sexe}}</p>
                    </div>
                    <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  my-2">
                    <div class="py-5">
                        <a class="btnForm" href="{{ route('Personnes.index') }}">Index</a>
                        <a class="btnForm" href="{{ route('Personnes.edit',[$personne->id]) }}">Modifier</a>
                        <a class="btnForm" href="{{ route('Personnes.destroy',[$personne->id]) }}">Supprimer</a>

                    </div>
                </div>
            </div>
        </div>
        <div>

            <h2>filmographie</h2>
            <hr class=" mb-5">
            <div class="flex flex-row shrink-0 ">
                @if($personne->films->count() > 0 || $personne->filmsR->count() > 0 || $personne->filmsP->count() > 0)
                    @if($personne->films->count() > 0)
                        @foreach($personne->films as $film)
                            <div class="rounded-lg bg-black w-48">
                                <a href="{{route('Films.show',$film)}}">
                                    <div class="flex flex-col items-center py-10">
                                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="img\Films\{{$film->urlaffiche}}" alt="{{$film->urlaffiche}}"/>
                                        <h5 class="indent-0 mb-1 text-xl font-medium text-gray-900">{{$film->titre}}</h5>
                                        <span class="">Rôle : Acteur</span>
                                        <span class="text-sm text-gray-500">{{ $film->datesortie}}</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                    @if($personne->filmsR->count() > 0)
                        @foreach($personne->filmsR as $film)
                                <div class="rounded-lg bg-black w-48">
                                    <a href="{{route('Films.show',$film)}}">
                                        <div class="flex flex-col items-center py-10">
                                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="img\Films\{{$film->urlaffiche}}" alt="{{$film->urlaffiche}}"/>
                                            <h5 class="indent-0 mb-1 text-xl font-medium text-gray-900">{{$film->titre}}</h5>
                                            <span class="" >Rôle : Réalisateur</span>
                                            <span class="text-sm text-gray-500">{{ $film->datesortie}}</span>
                                        </div>
                                    </a>
                                </div>
                        @endforeach
                    @endif
                    @if($personne->filmsP->count() > 0)
                        @foreach($personne->filmsP as $film)
                                <div class="rounded-lg bg-black w-48">
                                    <a href="{{route('Films.show',$film)}}">
                                        <div class="flex flex-col items-center py-10">
                                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="img\Films\{{$film->urlaffiche}}" alt="{{$film->urlaffiche}}"/>
                                            <h5 class="indent-0 mb-1 text-xl font-medium text-gray-900">{{$film->titre}}</h5>
                                            <span class="" >Rôle : Producteur</span>
                                            <span class="text-sm text-gray-500">{{ $film->datesortie}}</span>
                                        </div>
                                    </a>
                                </div>
                        @endforeach
                    @endif
                @else
                    <h1>Aucun film</h1>
                @endif
            </div>
        </div>
        </section>
    @endsection
