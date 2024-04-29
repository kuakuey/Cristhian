@extends('layouts.spotify')

@section('title', $artista)

@section('style')
    <link rel="stylesheet" href="{{ asset('css/artista.css')}}">
@endsection

@section('content')
        <div id="cont3">
            <div id="img">
                <div id="presentacion">
                    <div id="prueba4">
                        <div id="art"><h3>Artista Verificado</h3></div>
                        <div id="nomartista"><h1>{{$artista}}</h1></div>
                        <div id="view"><h2>10 oyentes mensuales</h2></div>
                    </div>
                </div>
            </div>
            <div id="presentacionnuevo" class="back">
                <div id="opcionesArtista">
                    <div><span class="gridicons--play"></span></div>
                    <div id="seguirBtn"><a href="">Seguir</a></div>
                    <div id="more"><a href=""><span class="mingcute--more-1-fill"></span></a></div>
                </div>
                <div class="back">
                    <div><h1>Populares</h1></div>
                    <div id="componenteAlbum">


                        <table class="table table-sm table-bordered">

                            <tbody>
                    
                            @foreach ($datos as $artistas)
                                @php
                                    $contador = 1
                                @endphp
                                <tr>
                                    <td class="tbRow">{{$artistas->id_album}}</td>
                                    <td class="tbRow"><span class="iconoir--album" id="iconalbum"></span></td>
                                    <td class="tbRow">{{$artistas->nombrealbum}}</td>
                                    <td class="tbRow">{{$artistas->reproducciones}}</td>
                                    <td class="tbRow">{{$artistas->duracion}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>




                    </div>
                </div>
                <div class="back">
                    <div><h1>Listas mas escuchadas</h1></div>
                    <div id="componenteAlbum">
                        <x-album>Ejemplo1
                            <x-slot name="title">Album</x-slot>
                            <x-slot name="pop">pop</x-slot>
                        </x-album>

                        {{-- <x-album></x-album>
                        <x-album></x-album>
                        <x-album></x-album>
                        <x-album></x-album>
                        <x-album></x-album>
                        <x-album></x-album>
                        <x-album></x-album> --}}
                    </div>
                </div>
            </div>
        </div>
@endsection