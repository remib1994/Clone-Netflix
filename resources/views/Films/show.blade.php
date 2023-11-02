@extends('layouts.app')
@section('title',"Creation Film")

@section('contenu')
    <section class="main-container" >
    <div class="shadow-lg text-red-700 mx-auto items-center justify-center w-3/12">
        <h1 class="indent"> {{$film->titre}}</h1>
        <h2>TEST</h2>
        <h3>TEST</h3>
        <h4>TEST</h4>
        <h5>TEST</h5>
        <h6>TEST</h6>
        <p class="indent"> {{$film->description}}</p>

        </div>

    </div>

    </section>
@endsection
