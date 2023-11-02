    @extends('layouts.app')
    @section('title',"Netflix Clone")

    @section('contenu')

    <section class="main-container " >
        <div class="text-center">
            <h1> Affichage de personne</h1>

        </div>
        <div class="location " id="home">
            <h1 class="text-3xl" id="home">Tous les personnes</h1>
            <div class="flex flex-row overflow-x-auto">

                @if($personnes->count() > 0)
                    @foreach($personnes as $personne)
                        <a href="{{route('Personnes.show',$personne->id)}}" class="flex items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <div class=" w-3/12">
                                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{$personne->urlphoto}}" alt="">
                            </div>
                            <div class="justify-between p-4 leading-normal w-9/12">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$personne->prenom}} {{$personne->nom}}</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                  </p>
                            </div>
                        </a>
                    @endforeach
                @else
                    <h1>Aucun film</h1>
                @endif
            </div>
            <h1 class="text-3xl" id="home">Tous les acteurs</h1>
            <div class="box ">
                @if($personnesActeurs->count() > 0)
                    @foreach($personnesActeurs as $personne)
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


        </div>
        </section>
    @endsection
