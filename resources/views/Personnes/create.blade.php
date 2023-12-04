@extends('layouts.app')
@section('title',"Netflix Clone")

@section('contenu')
    <section class="main-container" >
        <div class="w-6/12 justify-center text-center mx-auto">
            <h2>Création de Personne</h2>
        </div>
        <div class="w-6/12 justify-end text-right mx-auto">
            <div class="flex-wrap">
                <form method="post" action="{{ route('Personnes.store') }}">
                    @csrf
                    <div class="py-1">
                        <label for="nom">Nom : </label>
                        <input type="text" name="nom" id="nom" class="inputForm" value="{{old('nom')}}">
                    </div>
                    <div class="py-1">
                        <label for="prenom">Prenom : </label>
                        <input type="text" name="prenom" id="prenom" class="inputForm" value="{{old('prenom')}}">
                    </div>
                    <div class="py-1">
                        <label for="date_naissance">Date de naissance : </label>
                        <input type="date" name="date_naissance" id="date_naissance" class="inputForm" value="{{old('date_naissance')}}">
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
                        <div class="items-center text-center">
                            <label for ="acteur">acteur</label>
                            <input type="radio" name="role" id="acteur" class="inputForm" value="acteur" checked>
                            <label for ="realisateur">réalisateur</label>
                            <input type="radio" name="role" id="realisateur" class="inputForm" value="réalisateur">
                            <label for ="producteur">producteur</label>
                            <input type="radio" name="role" id="producteur" class="inputForm" value="non-producteur">

                        </div>

                    <hr class="w-48 h-1 mx-auto bg-red-800 border-0 rounded  my-2">
                        <label for="urlphoto">Sélectionner une photo pour la personne, en format .png, .jpg</label>

                        <input type="file" class="form-control-file" id="urlphoto" name="urlphoto">

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                        <div class="mb-4 grid-cols-3 grid gap-5 max-md:grid-cols-1">
                            <input type="submit" value="Créer" class=" w-3/12 text-white dark:text-bleutr-3 px-4 py-3 rounded font-medium w-full">
                            <input type="reset" value="Annuler" class="w-3/12   text-white dark:text-bleutr-3 px-4 py-3 rounded font-medium w-full">
                        </div>
                    </div>

                </form>

            </div>
        </div>
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        {!! JsValidator::formRequest('App\Http\Requests\PersonneRequest') !!}

    </section>

@endsection
