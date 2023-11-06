@extends('layouts.app')
@section('title',"Netflix Clone")

@section('contenu')
    <div class="w-6/12 mx-auto text-center">
        <h1> Création de Personne</h1>
        <form action="{{route('Personnes.store')}}" method="post" enctype="multipart/form-data">
            @csrf
                <h2> Identification</h2>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Nom" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('nom') border-red-500 @enderror" value="{{old('nom')}}">
                @error('nom')
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom" placeholder="Prenom" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('prenom') border-red-500 @enderror" value="{{old('prenom')}}">
                @error('prenom')
                <label for="date_naissance">Date de naissance</label>
                <input type="date" name="date_naissance" id="date_naissance" placeholder="Date de naissance" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('date_naissance') border-red-500 @enderror" value="{{old('date_naissance')}}">
                @error('date_naissance')
                <label for="urlphoto">Url de la photo</label>
                <input type="text" name="urlphoto" id="urlphoto" placeholder="Url de la photo" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('urlphoto') border-red-500 @enderror" value="{{old('urlphoto')}}">
                @error('urlphoto')
                <label for="nationalite">Nationalité</label>
                <input type="text" name="nationalite" id="nationalite" placeholder="Nationalité" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('nationalite') border-red-500 @enderror" value="{{old('nationalite')}}">
                @error('nationalite')
                <label for="sexe">Sexe</label>
                <input type="text" name="sexe" id="sexe" placeholder="Sexe" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('sexe') border-red-500 @enderror" value="{{old('sexe')}}">
                @error('sexe')
                <label for="role">Role</label>
                <input type="text" name="role" id="role" placeholder="Role" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('role') border-red-500 @enderror" value="{{old('role')}}">
                @error('role')


    </form>

    </div>

    <div class=""

@endsection
