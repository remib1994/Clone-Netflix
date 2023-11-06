@extends('layouts.app')
@section('title',"Creation Film")

@section('contenu')
    <h1>Formulaire de creation Films</h1>
    <form method="post" action="{{route('films.store')}}">
        
        @titre
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" placeholder="Titre du film" >
            
        </div>
        @urlaffiche
        <div class="form-group">
            <label for="urlaffiche">Url de l'affiche</label>
            <input type="text" name="urlaffiche" id="urlaffiche" class="form-control" placeholder="Url de l'affiche" >
            
        </div>
        @genre
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" id="genre" class="form-control" placeholder="Genre du film" >
            
        </div>
        @pays
        <div class="form-group">
            <label for="pays">Pays</label>
            <input type="text" name="pays" id="pays" class="form-control" placeholder="Pays du film">
            
        </div>
        @univers
        <div class="form-group">
            <label for="univers">Univers</label>
            <input type="text" name="univers" id="univers" class="form-control" placeholder="Univers du film" >
            
        </div>
        @audience
        <div class="form-group">
            <label for="audience">Audience</label>
            <input type="text" name="audience" id="audience" class="form-control" placeholder="Audience du film" >
            
        </div>
        @realisateur_id
        <select name="realisateur_id" id="realisateur_id">
            @foreach($realisateurs as $realisateur)
                <option value="{{$realisateur->id}}">{{$realisateur->nom}}</option>
            @endforeach
        </select>
        @producteur_id
        <select name="producteur_id" id="producteur_id">
            @foreach($producteurs as $producteur)
                <option value="{{$producteur->id}}">{{$producteur->nom}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
@endsection
