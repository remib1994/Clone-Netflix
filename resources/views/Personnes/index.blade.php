    @extends('layouts.app')
    @section('title',"Netflix Clone")

    @section('contenu')

    <section class="main-container " >
        <div class="text-center">
            <h1> Affichage de personne</h1>

        </div>
        <div class="location " id="home">
            <h2 class="text-3xl w-2/12" id="home">Tous les personnes</h2>
        </div>
        <div class="flex flex-row shrink-0 ">

            @if($personnes->count() > 0)
                @foreach($personnes as $personne)

                    <div class="rounded-lg bg-black">

                        <div class="flex  justify-end px-4 pt-4 ">
                            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-red-600  focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                                <span class="sr-only">Open dropdown</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                    <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-red-950">
                                <ul class="py-2" aria-labelledby="dropdownButton">
                                    <li>
                                        <a href="{{route('Personnes.edit',$personne->id)}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Modifier</a>
                                    </li>
                                    <li>
                                        <a href="{{route('Personnes.destroy',$personne->id)}}" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Supprimer</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{route('Personnes.show',$personne->id)}}">
                        <div class="flex flex-col items-center pb-10">

                                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{$personne->urlphoto}}" alt="Bonnie image"/>
                                <h5 class="indent-0 mb-1 text-xl font-medium text-gray-900 dark:text-red-900 ">{{$personne->prenom}} {{ $personne->nom}}</h5>
                                <span class="text-sm text-gray-500 dark:text-gray-400">{{ $personne->role}}</span>


                        </div>
                        </a>
                    </div>

                @endforeach
            @else
                <h1>Aucun Acteur</h1>
            @endif
        </div>
        <div class="location " id="home">
            <h2 class="text-3xl w-2/12" id="home">Tous les personnes</h2>
        </div>
        <div class="flex flex-row overflow-x-auto">

            @if($personnesActeurs->count() > 0)
                @foreach($personnesActeurs as $personne)

                    <div class="w-[200px] max-w-sm rounded-lg bg-black">
                        <div class="flex justify-end px-4 pt-4 ">
                            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-red-600  focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                                <span class="sr-only">Open dropdown</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                    <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-red-950">
                                <ul class="py-2" aria-labelledby="dropdownButton">
                                    <li>
                                        <a href="{{route('Personnes.edit',$personne->id)}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Modifier</a>
                                    </li>
                                    <li>
                                        <a href="{{route('Personnes.destroy',$personne->id)}}" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Supprimer</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{$personne->urlphoto}}" alt="Bonnie image"/>
                            <a href="{{route('Personnes.show',$personne->id)}}"><h5 class="indent-0 mb-1 text-xl font-medium text-gray-900 dark:text-red-900 ">{{$personne->prenom}} {{ $personne->nom}}</h5></a>
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $personne->role}}</span>

                        </div>
                    </div>

                @endforeach
            @else
                <h1>Aucun Acteur</h1>
            @endif
        </div>
            <h1 class="text-3xl" id="home">Tous les Realisateurs</h1>
            <div class="box ">
                @if($personnesRealisateurs->count() > 0)
                    @foreach($personnesRealisateurs as $personne)
                        <a href="{{--{{route('films.show',$film->id)}}--}}">
                            <h2>{{$personne->prenom}} {{$personne->nom}}</h2>
                            {{--                            <p>date de naissance : {{$personne->date_naissance}}<br>--}}
                            {{--                                nationalite : {{$personne->nationalite}}<br>--}}
                            {{--                                sexe : {{$personne->sexe}}<br>--}}
                            {{--                                rôle : {{$personne->role}}<br>--}}
                            {{--                                </p>--}}
                            <img src="{{$personne->urlphoto}}" alt="">
                        </a>
                    @endforeach
                @else
                    <h1>Aucun film</h1>
                @endif
            </div>
            <h1 class="text-3xl" id="home">Tous les producteurs</h1>
            <div class="box ">
                @if($personnesProducteurs->count() > 0)
                    @foreach($personnesProducteurs as $personne)
                        <a href="{{--{{route('films.show',$film->id)}}--}}">
                            <h2>{{$personne->prenom}} {{$personne->nom}}</h2>
                            {{--                            <p>date de naissance : {{$personne->date_naissance}}<br>--}}
                            {{--                                nationalite : {{$personne->nationalite}}<br>--}}
                            {{--                                sexe : {{$personne->sexe}}<br>--}}
                            {{--                                rôle : {{$personne->role}}<br>--}}
                            {{--                                </p>--}}
                            <img src="{{$personne->urlphoto}}" alt="">
                        </a>
                    @endforeach
                @else
                    <h1>Aucun film</h1>
                @endif
            </div>
            <h1 class="text-3xl" id="home">Tous les femmes</h1>
            <div class="box ">
                @if($personnesFemmes->count() > 0)
                    @foreach($personnesFemmes as $personne)

                        <a href="{{--{{route('films.show',$film->id)}}--}}">
                            <h2>{{$personne->prenom}} {{$personne->nom}}</h2>
                            {{--                            <p>date de naissance : {{$personne->date_naissance}}<br>--}}
                            {{--                                nationalite : {{$personne->nationalite}}<br>--}}
                            {{--                                sexe : {{$personne->sexe}}<br>--}}
                            {{--                                rôle : {{$personne->role}}<br>--}}
                            {{--                                </p>--}}
                            <img src="{{$personne->urlphoto}}" alt="">
                        </a>
                    @endforeach
                @else
                    <h1>Aucun film</h1>
                @endif
            </div>



        </section>
    @endsection
