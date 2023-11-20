@extends('layouts.app')
@section('title',"Netflix Clone")

@section('contenu')
    <section class="main-container" >
        <div class="w-6/12 justify-center text-center mx-auto">
            <h2>Création de Personne</h2>
        </div>
        <div class="w-3/12 justify-end text-right mx-auto">
            <div class="flex-row">
                <div class="py-1">
                    <label for="nom">Nom : </label>
                    <input type="text" name="nom" id="nom" class="inputForm" value="{{old('nom')}}">
                </div>
                <div class="py-1">
                    <label for="prenom">Prenom : </label>
                    <input type="text" name="prenom" id="prenom" class="inputForm" value="{{old('prenom')}}">
                </div>
                <div class="py-1">
                    <label for="dateNaissance">Date de naissance : </label>
                    <input type="date" name="dateNaissance" id="dateNaissance" class="inputForm" value="{{old('dateNaissance')}}">
                </div>
                <div class="py-1">
                    <label for="nationalite">Nationalité : </label>
                    <input type="text" name="nationalite" id="nationalite" class="inputForm" value="{{old('nationalite')}}">
                </div>
                <hr class="w-48 h-1 mx-auto bg-red-600 border-0 rounded my-2">

                <div class="py-1">
                    <div class="text-center">
                        <p class="font-bold pb-2">Genre</p>
                    </div>

                    <label for ="sexeH">Homme</label>
                    <input type="radio" name="sexe" id="sexeH" class="inputForm"  value="homme">
                    <label for ="sexeF">Femme</label>
                    <input type="radio" name="sexe" id="sexeF" class="inputForm" value="femme">
                    <label for ="sexeNB">Non-Binaire</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                </div>
                <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  my-2">
                <div class="py-1">
                    <div class="text-center">
                        <p class="font-bold pb-2 h-auto">Rôle principal</p>
                    </div>

                    <label for ="sexeH">Homme</label>
                    <input type="radio" name="sexe" id="sexeH" class="inputForm"  value="homme">
                    <label for ="sexeF">Femme</label>
                    <input type="radio" name="sexe" id="sexeF" class="inputForm" value="femme">
                    <label for ="sexeNB">Non-Binaire</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                </div>
                <div>

                </div>
            </div>
        </div>

    </section>

@endsection
