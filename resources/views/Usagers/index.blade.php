@extends('layouts.app')
@section('title',"Netflix Clone")


@section('contenu')

    <div class="my-5 w-6/12 mx-auto">
        <div class="p-5">
            <h1 class="bg-center text-center"> Liste d'utilisateur</h1>
        </div>
            <!-- Button Create User-->
                <a class="btnForm" href="{{route('Usagers.create')}}">
                    Nouveau Utilisateur
                </a>

        </div>


        <!-- Tableau -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-6/12 mx-auto">

            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-black uppercase bg-red-600">
                <tr>
                    <th scope="col" class="p-4">

                    </th>
                    <th scope="col" class="px-6 py-3">
                        email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nom d'usager
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Prenom et nom
                    </th>
                    <th scope="col" class="px-6 py-3">
                        role
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                </tr>
                </thead>
                <tbody>
                        @forelse($usagers as $usager)
                            <tr class="border-b text-black border-red-600 odd:bg-red-200 bg-red-300">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <btn class="">
                                            <a class="" href="{{ route('Usagers.edit',[$usager->id]) }}">
                                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                                    <path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>
                                                    <path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>
                                                </svg>
                                            </a>
                                        </btn>
                                    </div>
                                </td>
                                <td class="px-6 py-4 font-medium whitespace-nowrap">
                                    {{$usager->email}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$usager->nomUsager}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$usager->prenom}} {{$usager->nom}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$usager->role}}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <btn class="">
                                            <a class="" href="{{ route('Usagers.destroy',[$usager]) }}">
                                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                                    <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z"/>
                                                </svg>
                                            </a>
                                        </btn>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        <tr class="border-b bg-bleutr-1 text-black dark:bg-bleutr-1 dark:border-gray-700 hover:bg-bleutr-2 dark:hover:bg-bleutr-2  dark:text-bleutr-3">
                            <td colspan="5" class="text-center w-4 p-4">
                                Aucune procédure
                            </td>
                        </tr>
                        @endforelse




                </tbody>
            </table>
        </div>


@endsection
