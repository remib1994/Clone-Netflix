@extends('layouts.app')


@section('contenu')
   

  
<section class="main-container " >
        <div class="text-center">
            <h1 class="text-5xl text-blue-600"> Affichage de film</h1>

        </div>
        <div class="location " id="home">
            <h1 class="text-3xl" id="home">Tous les personnes</h1>
            <div class="">
                @if(isset($films))
                        <a href="" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{$films->urlaffiche}}" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$films->titre}}</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                description : {{$films->description}}<br>
                                date sortie : {{$films->datesortie}}<br>
                                rating : {{$films->rating}}<br>
                                genre : {{$films->genre}}<br>
                                univers : {{$films->univers}} <br>
                                audience : {{$films->audience}} <br>
                                pays : {{$films->pays}}<br>
                                trailer : {{$films->urltrailer}}<br>
                                </p>
                            </div>
                        </a>
                        @else
                        <p>pas de films selectionner</p>
                        <a href="{{route('Films.index')}}">retour</a>
                        @endif

        </section>
    @endsection
