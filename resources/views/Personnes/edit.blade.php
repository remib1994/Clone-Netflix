@extends('layouts.app')
@section('title',"Netflix Clone")

@section('contenu')
    <section class="main-container " >
    <div class="m-auto justify-center w-6/12">
        <div class="mb-4">
            <h2 class="">Films lié a l'acteur</h2>


            <form action="{{route('ActeurFilm.detach')}}" method="post">
                @csrf
                <input type="hidden" name="acteur_id" value="{{$personne->id}}">
                <div class="flex">
                    <div class="flex relative w-full">
                        <select name="film_id" id="film_id" class="text-black bg-gray-100 border-2 w-full p-4 rounded-lg @error('departement_id') border-red-500 @enderror">
                            <option value="">--Choisir un film à enlever--</option>
                            @foreach($filmsA as $film)

                                <option value="{{$film->id}}">
                                    {{$film->titre}}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit" class="btnSelect">
                            Enlever

                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="mb-4">
            <h2 class="">Films non lié a l'acteur</h2>


            <form action="{{route('ActeurFilm.attach')}}" method="post">
                @csrf
                <input type="hidden" name="acteur_id" value="{{$personne->id}}">
                <div class="flex">
                    <div class="flex relative w-full">
                        <select name="film_id" id="film_id" class="text-black bg-gray-100 border-2 w-full p-4 rounded-lg @error('departement_id') border-red-500 @enderror">
                            <option value="">--Choisir un département à rajouter--</option>
                            @foreach($films as $film)

                                <option value="{{$film->id}}">
                                    {{$film->titre}}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit" class="btnSelect">
                            Ajouter
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </section>
@endsection
