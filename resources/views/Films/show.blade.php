@extends('layouts.app')


@section('contenu')
   

  
<section class="main-container " >
    @auth
@if(isset($films))
        <div class="text-center">
            <h1 class="text-5xl text-blue-600"> Affichage de film</h1>

        </div>
        <div class="location " id="home">
            <h1 class="text-3xl" id="home">Tous les personnes</h1>
            <div class="">
             
                        <a href="" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{asset('img/films/' . $films->urlaffiche)}}" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$films->titre}}</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                description : {{$films->description}}<br>
                                date sortie : {{$films->datesortie}}<br>
                                rating : {{$films->rating}}<br>
                                producteur : {{$films->producteur->nom}} {{$films->producteur->prenom}} <br>
                                realisateur : {{$films->realisateur->nom}} {{$films->realisateur->prenom}}<br>
                                genre : {{$films->genre}}<br>
                                univers : {{$films->univers}} <br>
                                audience : {{$films->audience}} <br>
                                pays : {{$films->pays}}<br>
                                trailer : {{$films->urltrailer}}<br>
                                @role('admin')
                                <br>
                                <form method="post" action="{{route('Films.destroy',[$films->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">supprimer</button>
                               </form>
                                 @endrole
                                </p>
                            </div>
                        </a>
                        <a href="{{route('Films.edit',[$films->id])}}">modifier</a>
                                

                        <hr class="my-4">
                        @if($films->acteurs->count() > 0)
                        acteur:
                        @foreach($films->acteurs as $acteur)
                                 <p>( {{$acteur->nom}} {{$acteur->prenom}} )</p>
                        @endforeach
                        @else
                        aucun acteurs
                        @endif
                        @else
                        <p>pas de films selectionner</p>
                        <a href="{{route('Films.index')}}">retour</a>
                         @endif
                       
        <form method="post" action="{{route('logout')}}">
            @csrf
            <button type="submit">deconnexion</button>
        </form>
        @else
        <h1>vous n'etes pas connecter</h1>
        <a href="{{route('showLoginForm')}}">connexion</a>
        @endauth

        </section>
        @if(isset($errors) && $errors->any())
        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach

            </ul>
        </div>
        @endif
        
    @endsection
 <div></div>
 <div></div>
 <div></div>