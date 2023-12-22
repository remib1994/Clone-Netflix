@extends('layouts.app')
@section('title',"Netflix Clone")

@section('contenu')
    <section class="main-container " >
    <div class="m-auto justify-center w-6/12">
            <div class="w-6/12 justify-center text-center mx-auto">
                <h2>Modification de Personne</h2>
            </div>
            <div class="w-6/12 justify-end text-right mx-auto">
                <div class="flex-wrap">
                    <form method="post" action="{{ route('Personnes.update', $personne->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="py-1">
                            <label for="nom">Nom : </label>
                            <input type="text" name="nom" id="nom" class="inputForm" value="{{$personne->nom}}">
                        </div>
                        <div class="py-1">
                            <label for="prenom">Prenom : </label>
                            <input type="text" name="prenom" id="prenom" class="inputForm" value="{{$personne->prenom}}">
                        </div>
                        <div class="py-1">
                            <label for="date_naissance">Date de naissance : </label>
                            <input type="date" name="date_naissance" id="date_naissance" class="inputForm" value="{{$personne->date_naissance}}">
                        </div>
                        <div class="py-1">
                            <label for="nationalite">Nationalité : </label>
                            <input type="text" name="nationalite" id="nationalite" class="inputForm" value="{{$personne->nationalite}}" >
                        </div>
                        <hr class="w-48 h-1 mx-auto bg-red-600 border-0 rounded my-2">

                        <div class="py-1">
                            <div class="text-center items-center">
                                <p class="font-bold pb-2">Genre</p>
                            </div>
                            <div class="items-center text-center">

                            <label for ="sexeH">Homme</label>
                            <input type="radio" name="sexe" id="sexeH" class="inputForm"  value="homme">
                            <label for ="sexeF">Femme</label>
                            <input type="radio" name="sexe" id="sexeF" class="inputForm" value="femme">
                            <label for ="sexeNB">Non-Binaire</label>
                            <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                            </div>
                        </div>
                        <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  my-2">
                        <div class="py-1">
                            <div class="text-center">
                                <p class="font-bold pb-2 h-auto">Rôle principal</p>
                            </div>
                            <div class="items-center text-center">
                                <label for ="acteur">acteur</label>
                                <input type="radio" name="role" id="acteur" class="inputForm" value="acteur" >
                                <label for ="realisateur">réalisateur</label>
                                <input type="radio" name="role" id="realisateur" class="inputForm" value="réalisateur">
                                <label for ="producteur">producteur</label>
                                <input type="radio" name="role" id="producteur" class="inputForm" value="non-producteur">
                            </div>
                        </div>

                        <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  my-2">
                            <div class="items-center text-center flex flex-row-">
                                <label for="urlphoto">Sélectionner une photo pour la personne, en format .png, .jpg</label>
                                <input type="file" class="form-control-file" id="urlphoto" name="urlphoto">
                            </div>
                        <div class="text-center mx-auto">
                            <input type="submit" value="Modifier" class="  btnForm">
                            <input type="reset" value="Annuler" class=" btnForm">
                            <a href="{{route('Personnes.index')}}" type="button" class=" btnForm">Retour</a>
                        </div>
                        <div class="text-center">
                            <a href="{{route('Personnes.destroy',$personne)}}" type="button" class=" btnForm w-5/12">Supprimer </a>

                        </div>



                    </form>

                </div>
                <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  my-2">
                <div class="mb-4">
                    <h2 class="">Films lié a l'acteur</h2>


                    <form action="{{route('ActeurFilm.detach')}}" method="post">
                        @csrf
                        <input type="hidden" name="acteur_id" value="{{$personne->id}}">
                        <div class="flex">
                            <div class="flex relative w-full">
                                <select name="film_id" id="film_id" class="text-black bg-gray-100 border-2 w-full p-4 rounded-lg">
                                    <option value="">--Choisir un film à enlever--</option>
                                    @foreach($personne->films as $film)

                                        <option value="{{$film->id}}">{{$film->titre}} </option>
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
                                <select name="film_id" id="film_id" class="text-black bg-gray-100 border-2 w-full p-4 rounded-lg">
                                    <option value="">--Choisir un film à rajouter--</option>
                                    @foreach($filmsNonInclus as $film)

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



        @error('name')
        <div class=""><h4 class="text-red-800">{{ $message }}</h4></div>
        @enderror

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        {!! JsValidator::formRequest('App\Http\Requests\PersonneRequest') !!}

    </section>
@endsection
