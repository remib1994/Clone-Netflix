@extends('layouts.app')
@section('title',"Creation Film")

@section('contenu')
<section class="main-container" >
        <div class="w-6/12 justify-center text-center mx-auto">
            <h2>Création de Film</h2>
        </div>
        <div class="w-3/12 justify-end text-right mx-auto">
            <div class="flex-row">
                <div class="py-1">
                    <label for="nom">Titre : </label>
                    <input type="text" name="nom" id="nom" class="inputForm" value="{{old('nom')}}">
                </div>
                <div class="py-1">
                    <label for="prenom">Description : </label>
                    <input type="text" name="prenom" id="prenom" class="inputForm" value="{{old('prenom')}}">
                </div>
                <div class="py-1">
                    <label for="dateNaissance">date sortie :</label>
                    <input type="date" name="dateNaissance" id="dateNaissance" class="inputForm" value="{{old('dateNaissance')}}">
                </div>
                <div class="py-1">
                    <label for="nationalite">image: </label>
                    <input type="text" name="nationalite" id="nationalite" class="inputForm" value="{{old('nationalite')}}">
                </div>
                <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  my-2">
                <div class="py-1">
                    <div class="text-center">
                        <p class="font-bold pb-2 h-auto">univers</p>
                    </div>

                    <label for ="sexeH">Action</label>
                    <input type="radio" name="sexe" id="sexeH" class="inputForm"  value="homme">
                    <label for ="sexeF">Aventure</label>
                    <input type="radio" name="sexe" id="sexeF" class="inputForm" value="femme">
                    <label for ="sexeNB">Comédie</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                    <label for ="sexeNB">Drama</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                    <label for ="sexeNB">Fantastique</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                    <label for ="sexeNB">Horreur</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                    <label for ="sexeNB">Policier</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                    <label for ="sexeNB">Science-fiction</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                    <label for ="sexeNB">Thriller</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
               
                </div>
                <div>
                <hr class="w-48 h-1 mx-auto bg-red-600 border-0 rounded my-2">

                <div class="py-1">
                    <div class="text-center">
                        <p class="font-bold pb-2">audience</p>
                    </div>

                    <label for ="sexeH">tout publique</label>
                    <input type="radio" name="sexe" id="sexeH" class="inputForm"  value="TP">
                    <label for ="sexeF">10+</label>
                    <input type="radio" name="sexe" id="sexeF" class="inputForm" value="10">
                    <label for ="sexeNB">12+</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="12">
                    <label for ="sexeNB">16+</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="16">
                    <label for ="sexeNB">18+</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="18">
               
                </div>
                <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  my-2">
                <div class="py-1">
                    <div class="text-center">
                        <p class="font-bold pb-2 h-auto">univers</p>
                    </div>

                    <label for ="sexeH">DC</label>
                    <input type="radio" name="sexe" id="sexeH" class="inputForm"  value="homme">
                    <label for ="sexeF">Marvel</label>
                    <input type="radio" name="sexe" id="sexeF" class="inputForm" value="femme">
                    <label for ="sexeNB">Autre</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                </div>
                <div>
                <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  my-2">
                <div class="py-1">
                    <div class="text-center">
                        <p class="font-bold pb-2 h-auto">univers</p>
                    </div>

                    <label for ="sexeH">Canada</label>
                    <input type="radio" name="sexe" id="sexeH" class="inputForm"  value="homme">
                    <label for ="sexeF">France</label>
                    <input type="radio" name="sexe" id="sexeF" class="inputForm" value="femme">
                    <label for ="sexeNB">USA</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                    <label for ="sexeNB">UK</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                    <label for ="sexeNB">Espagne</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                    <label for ="sexeNB">Italie</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                    <label for ="sexeNB">Allemagne</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                    <label for ="sexeNB">Japon</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                    <label for ="sexeNB">Chine</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                    <label for ="sexeNB">Corée du Sud</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                    <label for ="sexeNB">Autre</label>
                    <input type="radio" name="sexe" id="sexeNB" class="inputForm" value="non-binaire">
                                    
                </div>
                <div>
                <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  my-2">
                <label for="realisateur">Réalisateur : </label>
                <select name="realisateur" id="realisateur" class="inputForm">
                    @foreach($realisateurs as $realisateur)
                        <option value="{{$realisateur->id}}">{{$realisateur->nom}} {{$realisateur->prenom}}</option>
                    @endforeach
                </select>
                <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  my-2">
                <label for="producteur">Producteur : </label>
                <select name="producteur" id="producteur" class="inputForm">
                    @foreach($producteurs as $producteur)
                        <option value="{{$producteur->id}}">{{$producteur->nom}} {{$producteur->prenom}}</option>
                    @endforeach
                </div>
            </div>
        </div>

    </section>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Créer</button>
    </form>
@endsection
