@extends('layouts.app')

@section('title',"Netflix Clone")



@section('contenu')


@auth
@if(count($films))
    <section class="main-container" >

        <div class="text-center">
            
            <h1 id="home">Tous les films</h1>
            </div>
            </div>

            
            <div class="flex flex-row">
            <h2 class="text-3xl w-10/12" id="home">Tous les films</h2>
           
                <div class="ml-2 w-1/12">
                @role('admin')
                    <a class="flex flex-row text-white  dark:text-black hover:bg-red-700  font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:hover:font-bold dark:hover:text-black" href="{{route('films.create')}}">
                        <svg class="m-auto mr-2 w-[14px] h-[14px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                        Nouveau film
                    </a>
                    @endrole
                </div>



        </div>
            
            <div class="box">

                @if($films->count() > 0)

                    @foreach($films as $film)

                        <a href="{{route('films.show',[$film])}}">



                            <img src="{{asset('img/films/' . $film->urlaffiche)}}" alt="{{$film->titre}}" title="{{$film->titre}}">

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





         @role('admin','normal')
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


        @endrole

        @role('enfant')
        <h1 id="tvShows">Film pour une auditoire tout publique</h1>

        <div class="box">
            @if($filmsTP->count() > 0)

            @foreach($filmsTP as $film)
            <card>

<a href="{{route('films.show',[$film])}}">



        <img src="{{$film->urlaffiche}}" alt="">

    </a>

</card>

@endforeach

@else

<h1>Aucun film</h1>

@endif


        @endrole

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

