@extends('layouts.app')

@section('title',"Netflix Clone")



@section('contenu')


@auth
@if(count($films))
    <section class="main-container" >

        <div class="location" id="home">
            
            <h1 id="home">Tous les films</h1>
            @role('admin')
            <a href="{{route('films.create')}}">Ajouter un film</a>
            @endrole
            <div class="box">

                @if($films->count() > 0)

                    @foreach($films as $film)

                        <a href="{{route('films.show',[$film])}}">

                         

                            <img src="{{$film->urlaffiche}}" alt="">

                        </a>

                    @endforeach

                @else

                    <h1>Aucun film</h1>

                @endif





            </div>

        </div>

        <h1 id="myList">Films fait au Canada</h1>

        <div class="box">

            @if($filmsCanada->count() > 0)

                @foreach($filmsCanada as $film)

                <a href="{{route('films.show',[$film])}}">

                        

                        <img src="{{$film->urlaffiche}}" alt="">

                    </a>

                @endforeach

            @else

                <h1>Aucun film</h1>

            @endif





        </div>

        <h1 id="tvShows">Film de genre thriller</h1>

        <div class="box">

            @if($filmsGenre->count() > 0)

                @foreach($filmsGenre as $film)

                <a href="{{route('films.show',[$film])}}">

                        

                        <img src="{{$film->urlaffiche}}" alt="">

                    </a>

                @endforeach

            @else

                <h1>Aucun film</h1>

            @endif

        </div>





        <h1 id="tvShows">Film de l'univers Marvel </h1>

        <div class="box">

            @if($filmsUnivers->count() > 0)

                @foreach($filmsUnivers as $film)

                <a href="{{route('films.show',[$film])}}">

                        

                        <img src="{{$film->urlaffiche}}" alt="">

                    </a>

                @endforeach

            @else

                <h1>Aucun film</h1>

            @endif

        </div>



        <h1 id="tvShows">Film pour une auditoire mature</h1>

        <div class="box">

            @if($films18->count() > 0)

                @foreach($films18 as $film)

                    <card>

                    <a href="{{route('films.show',[$film])}}">

                           

                            <img src="{{$film->urlaffiche}}" alt="">

                        </a>

                    </card>

                @endforeach

            @else

                <h1>Aucun film</h1>

            @endif

        </div>

    </section>
@else
<p>pas de films</p>
@endif

<form method="post" action="{{route('logout')}}">
    @csrf
    <button type="submit">deconnexion</button>
</form>
@else
<h1>vous devez vous connecter</h1>
<a href="{{route('login')}}">se connecter</a>
@endauth


    <!-- END OF MAIN CONTAINER -->





@endsection

