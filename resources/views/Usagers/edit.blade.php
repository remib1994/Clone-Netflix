@extends('layouts.app')


@section('contenu')
    <section class="main-container" >
        <div class="m-auto justify-center w-6/12">

        <div class="w-6/12 justify-center text-center mx-auto">
            <h2>Création d'user</h2>
        </div>
        <div class="w-6/12 justify-end text-right mx-auto">
            <div class="flex-wrap">
                <form method="post" action="{{ route('Usagers.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="py-1">
                        <label for="email">email : </label>
                        <input type="email" name="email" id="email" class="inputForm" value="{{$usager->email}}">
                    </div>
                    <div class="py-1">
                        <label for="password">Mot de passe : </label>
                        <input type="password" name="password" id="password" class="inputForm" >
                    </div>
                    <div class="py-1">
                        <label for="nomUsager">Username : </label>
                        <input type="text" name="nomUsager" id="nomUsager" class="inputForm" >
                    </div>
                    <div class="py-1">
                        <label for="nom">Nom : </label>
                        <input type="text" name="nom" id="nom" class="inputForm" >
                    </div>
                    <div class="py-1">
                        <label for="prenom">Prenom : </label>
                        <input type="text" name="prenom" id="prenom" class="inputForm" >
                    </div>
                    <hr class="w-48 h-1 mx-auto bg-red-600 border-0 rounded my-2">

                    <div class="py-1">
                        <div class="text-center items-center">
                            <p class="font-bold pb-2">Type de compte</p>
                        </div>
                        <div class="items-center text-center">
                            @role('admin')
                            <label for ="Radmin">admin</label>
                            <input type="radio" name="role" id="Radmin" class="inputForm"  value="admin">
                            @endrole
                            <label for ="RNormal">normal</label>
                            <input type="radio" name="role" id="RNormal" class="inputForm" value="normal">
                            <label for ="REnfant">enfant</label>
                            <input type="radio" name="role" id="REnfant" class="inputForm" value="enfant">
                        </div>
                    </div>
                            <div class="text-center mx-auto">
                            <input type="submit" value="Créer" class="  btnForm">
                            <input type="reset" value="Annuler" class=" btnForm">
                        </div>
                        <div class="text-center">
                            <a href="{{route('login')}}" type="button" class=" btnForm">Login</a>
                        </div>
                    </div>

                </form>

            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        {!! JsValidator::formRequest('App\Http\Requests\UsagerRequest') !!}

    </section>

@endsection
