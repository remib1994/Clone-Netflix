@extends('layouts.app')


@section('contenu')
<h1>Formulaire de modificcation de Films</h1>
    <form method="post" action="{{route('films.store')}}">
        @csrf
        @titre
        <div class="form-group">
            <label for="titre">Titre</label>
            <input  type="text" name="titre" id="titre" class="form-control red" placeholder="Titre du film" value="{{$films->titre}}">

        </div>
        @description
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control red" placeholder="Description du film" value="{{$films->description}}" >
            </div>
        @urlaffiche
        <div class="form-group">
            <label for="urlaffiche">Url de l'affiche</label>
            <input type="text" name="urlaffiche" id="urlaffiche" class="form-control red" placeholder="Url de l'affiche" value="{{$films->urlaffiche}}" >

        </div>
        @genre
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" id="genre" class="form-control red" placeholder="Genre du film" value="{{$films->genre}}" >

        </div>
        @pays
        <div class="form-group">
            <label for="pays">Pays</label>
            <input type="text" name="pays" id="pays" class="form-control red" placeholder="Pays du film" value="{{$films->pays}}">

        </div>
        @univers
        <div class="form-group">
            <label for="univers">Univers</label>
            <input type="text" name="univers" id="univers" class="form-control red" placeholder="Univers du film" value="{{$films->univers}}">

        </div>
        @audience
        <div class="form-group">
            <label for="audience">Audience</label>
            <input type="text" name="audience" id="audience" class="form-control red" placeholder="Audience du film" value="{{$films->audience}}">

        </div>
        @datesortie
        <div class="form-group">
            <label for="datesortie">Date de sortie</label>
            <input type="date" name="datesortie" id="datesortie" class="form-control red" placeholder="Date de sortie du film" value="{{$films->datesortie}}">
            </div>
@rating
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="text" name="rating" id="rating" class="form-control red" placeholder="Rating du film" value="{{$films->rating}}">
            </div>
        @realisateur_id
        <select name="realisateur_id" id="realisateur_id" class="red" >
            @foreach($realisateurs as $realisateur)
                <option value="{{$realisateur->id}}" @if($realisateur->id == $films->realisateur_id) selected @endif class="red">{{$realisateur->prenom}} {{$realisateur->nom}}</option>
            @endforeach
        </select>
        @producteur_id


        <select name="producteur_id" id="producteur_id" class="red">
            @foreach($producteurs as $producteur)
                <option value="{{$producteur->id}}" @if($producteur->id == $films->producteur_id) selected @endif class="red">{{$producteur->prenom}} {{$producteur->nom}}</option>
            @endforeach
        </select>




        @urltrailer
        <div class="form-group">
            <label for="urltrailer">Url du trailer</label>
            <input type="text" name="urltrailer" id="urltrailer" class="form-control red" placeholder="Url du trailer du film" >
            </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>

@endsection
