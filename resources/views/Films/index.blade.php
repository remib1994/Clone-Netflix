@extends('layouts.app')

@section('title',"Netflix Clone")



@section('contenu')



    <section class="main-container" >

        <div class="location" id="home">

            <h1 id="home">Tous les films</h1>
            <a href="{{route('films.create')}}">Ajouter un film</a>
            <div class="box">

                @if($films->count() > 0)

                    @foreach($films as $film)

                        <a href="{{route('films.show',[$film])}}">

                            <h2>{{$film->titre}}</h2>

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

                    <a href="{{--{{route('films.show',$film->id)}}--}}">

                        <h2>{{$film->titre}}</h2>

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

                    <a href="{{--{{route('films.show',$film->id)}}--}}">

                        <h2>{{$film->titre}}</h2>

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

                    <a href="{{--{{route('films.show',$film->id)}}--}}">

                        <h2>{{$film->titre}}</h2>

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

                        <a href="{{--{{route('films.show',$film->id)}}--}}">

                            <h2>{{$film->titre}}</h2>

                            <img src="{{$film->urlaffiche}}" alt="">

                        </a>

                    </card>

                @endforeach

            @else

                <h1>Aucun film</h1>

            @endif

        </div>

    </section>



    <!-- END OF MAIN CONTAINER -->





@endsection

