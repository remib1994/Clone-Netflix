    @extends('layouts.app')
    @section('title',"Netflix Clone")

    @section('contenu')

    <section class="main-container " >
        <div class="text-center w-3/12 mx-auto">
            <h1> Affichage de personne</h1>
            <div class="rounded-lg bg-black">

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
                <a href="{{route('Personnes.show',$personne->id)}}">
                    <div class="flex flex-col items-center pb-10">

                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{$personne->urlphoto}}" alt="Bonnie image"/>
                        <h5 class="indent-0 mb-1 text-xl font-medium text-gray-900 dark:text-red-900 ">{{$personne->prenom}} {{ $personne->nom}}</h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $personne->role}}</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $personne->date_naissance}}</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $personne->nationalite}}</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $personne->sexe}}</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $personne->date_naissance}}</span>




                    </div>
                </a>
            </div>
        </div>
        <div>
            <h2>filmographie</h2>
            @if($personne->films->count() > 0)
                <h2>aucun film</h2>
            @else
            @foreach($personne->films as $film)
                <img src="{{$film->urlaffiche}}" alt="affiche du film"/>
                <h3>{{$film->titre}}</h3>


            @endforeach
            @endif
        </div>

        </section>
    @endsection
