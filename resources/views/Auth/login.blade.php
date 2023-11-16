@extends('layouts.app')
@section('title',"Netflix Clone")

@section('contenu')

    <section class="main-container " >
        <div class="text-center">
            <h1 class="text-white">Se connecter</h1>
        </div>

        <form method="post" action="{{route('login')}}">
            @csrf
            <div class="form-group">
                <label for="email" class="text-white">Email</label>
                <input type="email" name="email" id="email" class="form-control red" placeholder="email" >
            </div>
            <div class="form-group">
                <label for="password" class="text-white">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control red" placeholder="Mot de passe" >
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </div>




    </section>
@endsection
