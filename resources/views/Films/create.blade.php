@extends('layouts.app')
@section('title',"Creation Film")

@section('contenu')
<section class="main-container" >
        <div class="w-6/12 justify-center text-center mx-auto">
            <h2>Création de Film</h2>
        </div>
        <div class="w-3/12 justify-end text-right mx-auto">
            <div class="flex-row">
                <form action="{{route('films.store')}}" method="post">
                    @csrf
                    
                     
                <div class="py-1">
                    <label for="titre">Titre : </label>
                    <input type="text" name="titre" id="titre" class="inputForm" value="{{old('titre')}}">
                </div>
                <div class="py-1">
                    <label for="description">Description : </label>
                    <input type="text" name="description" id="description" class="inputForm" value="{{old('prenom')}}">
                </div>
                <div class="py-1">
                    <label for="dateS">date sortie :</label>
                    <input type="date" name="dateS" id="dateS" class="inputForm" value="{{old('dateNaissance')}}">
                </div>
                <div class="py-1">
                    <label for="img">image: </label>
                    <input type="text" name="img" id="img" class="inputForm" value="{{old('nationalite')}}">
                </div>
                <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  my-2">
                <div class="py-1">
                    <div class="text-center">
                        <p class="font-bold pb-2 h-auto">Genre</p>
                    </div>

                    <label for ="action">Action</label>
                    <input type="radio" name="genre" id="action" class="inputForm"  value="action">
                    <label for ="adven">Aventure</label>
                    <input type="radio" name="genre" id="Aventure" class="inputForm" value="Aventure">
                    <label for ="comed">Comédie</label>
                    <input type="radio" name="genre" id="Comédie" class="inputForm" value="Comédie">
                    <label for ="drama">Drama</label>
                    <input type="radio" name="genre" id="Drama" class="inputForm" value="Drama">
                    <label for ="fant">Fantastique</label>
                    <input type="radio" name="genre" id="Fantastique" class="inputForm" value="Fantastique">
                    <label for ="horr">Horreur</label>
                    <input type="radio" name="genre" id="Horreur" class="inputForm" value="Horreur">
                    <label for ="poli">Policier</label>
                    <input type="radio" name="genre" id="Policier" class="inputForm" value="Policier">
                    <label for ="scien">Science-fiction</label>
                    <input type="radio" name="genre" id="Science-fiction" class="inputForm" value="Science-fiction">
                    <label for ="thril">Thriller</label>
                    <input type="radio" name="genre" id="Thriller" class="inputForm" value="Thriller">
               
                </div>
                <div>
                <hr class="w-48 h-1 mx-auto bg-red-600 border-0 rounded my-2">

                <div class="py-1">
                    <div class="text-center">
                        <p class="font-bold pb-2">audience</p>
                    </div>

                    <label for ="tp">tout publique</label>
                    <input type="radio" name="audience" id="sexeH" class="inputForm"  value="TP">
                    <label for ="10">10+</label>
                    <input type="radio" name="audience" id="sexeF" class="inputForm" value="10">
                    <label for ="12">12+</label>
                    <input type="radio" name="audience" id="sexeNB" class="inputForm" value="12">
                    <label for ="16">16+</label>
                    <input type="radio" name="audience" id="sexeNB" class="inputForm" value="16">
                    <label for ="18">18+</label>
                    <input type="radio" name="audience" id="sexeNB" class="inputForm" value="18">
               
                </div>
                <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  my-2">
                <div class="py-1">
                    <div class="text-center">
                        <p class="font-bold pb-2 h-auto">univers</p>
                    </div>

                    <label for ="dc">DC</label>
                    <input type="radio" name="univers" id="sexeH" class="inputForm"  value="DC">
                    <label for ="mar">Marvel</label>
                    <input type="radio" name="univers" id="sexeF" class="inputForm" value="Marvel">
                    <label for ="autre">Autre</label>
                    <input type="radio" name="univers" id="sexeNB" class="inputForm" value="autre">
                </div>
                <div>
                <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  my-2">
                <div class="py-1">
                    <div class="text-center">
                        <p class="font-bold pb-2 h-auto">Pays</p>
                    </div>

                    <label for ="sexeH">Canada</label>
                    <input type="radio" name="pays" id="sexeH" class="inputForm"  value="Canada">
                    <label for ="sexeF">France</label>
                    <input type="radio" name="pays" id="sexeF" class="inputForm" value="France">
                    <label for ="sexeNB">USA</label>
                    <input type="radio" name="pays" id="sexeNB" class="inputForm" value="USA">
                    <label for ="sexeNB">UK</label>
                    <input type="radio" name="pays" id="sexeNB" class="inputForm" value="UK">
                    <label for ="sexeNB">Espagne</label>
                    <input type="radio" name="pays" id="sexeNB" class="inputForm" value="Espagne">
                    <label for ="sexeNB">Italie</label>
                    <input type="radio" name="pays" id="sexeNB" class="inputForm" value="Italie">
                    <label for ="sexeNB">Allemagne</label>
                    <input type="radio" name="pays" id="sexeNB" class="inputForm" value="Allemagne">
                    <label for ="sexeNB">Japon</label>
                    <input type="radio" name="pays" id="sexeNB" class="inputForm" value="Japon">
                    <label for ="sexeNB">Chine</label>
                    <input type="radio" name="pays" id="sexeNB" class="inputForm" value="Chine">
                    <label for ="sexeNB">Corée du Sud</label>
                    <input type="radio" name="pays" id="sexeNB" class="inputForm" value="Corée du Sud">
                    <label for ="sexeNB">Autre</label>
                    <input type="radio" name="pays" id="sexeNB" class="inputForm" value="Autre">
                                    
                </div>
                <div>
                <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  my-2">
                <label for="realisateur">Réalisateur : </label>
                <select name="realisateur_id" id="realisateur_id" class="inputForm">
                    @foreach($realisateurs as $realisateur)
                        <option value="{{$realisateur->id}}">{{$realisateur-­>id}} {{$realisateur->nom}} {{$realisateur->prenom}}</option>
                    @endforeach
                </select>
                <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  my-2">
                <label for="producteur">Producteur : </label>
                <select name="producteur" id="producteur" class="inputForm">
                    @foreach($producteurs as $producteur)
                        <option value="{{$producteur->id}}">{{$producteur->nom}} {{$producteur->prenom}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
           
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
                    
                </form>
    </section>
   
@endsection
