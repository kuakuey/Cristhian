@extends('layouts.spotify')

@section('title', 'Spotify - Reproductor web: musica para todos')

@section('style')
@endsection

@section('content')
        {{-- Artistas --}}
        <div id="artistaspopulares">
            <div id="cabeceraArtista" class="cabeceraArtista">
                <a href="#artistas" id="subtitulo"><h2>Artistas Populares</h2></a>
                <a href=""><h4>Mostrar todo</h4></a>
            </div>
            <div id="artistas">
                @foreach ($datos as $artistas)
                    <x-artistas>{{$artistas->nombre}}<x-slot name="title">Artista</x-slot></x-artistas>
                @endforeach
            </div>
        </div>

        {{-- Album --}}
        <div>
            <div id="s" class="cabeceraArtista">
                <a href="#artistas" id="subtitulo"><h2>Albumes Populares</h2></a>
                <a href=""><h4>Mostrar todo</h4></a>
            </div>
            
            <div id="artistas">

                @foreach ($datos_album as $album)
                    <x-album>{{$album->nombrealbum}}
                        <x-slot name="title">{{$album->nombre}}</x-slot>
                        <x-slot name="pop">{{$album->popularidad}}</x-slot>
                    </x-album>  
                @endforeach


        {{--@component('components/album')@endcomponent --}}
            </div>
        </div>

        {{-- Listas Destacadas --}}
        <div>
            <div id="s" class="cabeceraArtista">
                <a href="#artistas" id="subtitulo"><h2>Listas Destacadas</h2></a>
                <a href=""><h4>Mostrar todo</h4></a>
            </div>
            <div id="artistas">
                <x-lista-d></x-lista-d>
                <x-lista-d></x-lista-d>
                <x-lista-d></x-lista-d>
                <x-lista-d></x-lista-d>
                <x-lista-d></x-lista-d>
                <x-lista-d></x-lista-d>

            </div>
        </div>

        {{-- Playlist de Spotify --}}
        <div>
            <div id="s" class="cabeceraArtista">
                <a href="#artistas" id="subtitulo"><h2>Playlist de Spotify</h2></a>
                <a href=""><h4>Mostrar todo</h4></a>
            </div>
            <div id="artistas">
                {{-- <x-album></x-album>
                <x-album></x-album>
                <x-album></x-album>
                <x-album></x-album>
                <x-album></x-album>
                <x-album></x-album>
                <x-album></x-album>
                <x-album></x-album> --}}
            </div>
        </div>

        {{-- Espisodios de Tendencia --}}
        <div>
            <div id="s" class="cabeceraArtista">
                <a href="#artistas" id="subtitulo"><h2>Episodios de tendencia</h2></a>
                <a href=""><h4>Mostrar todo</h4></a>
            </div>
            <div id="artistas">
                {{-- <x-album></x-album>
                <x-album></x-album>
                <x-album></x-album>
                <x-album></x-album>
                <x-album></x-album>
                <x-album></x-album>
                <x-album></x-album>
                <x-album></x-album> --}}
            </div>
        </div>

        <div class="info">
            <div id="informacion">
                <div id="enlaces">
                    <h3>Compañia</h3>
                    <a href="">Acerca de</a>
                    <a href="">Empleo</a>
                    <a href="">For the Record</a>
                </div>
                <div id="enlaces">
                    <h3>Comunidades</h3>
                    <a href="">Para artistas</a>
                    <a href="">Desarrolladores</a>
                    <a href="">Publicidad</a>
                    <a href="">Inversionista</a>
                    <a href="">Proveedores</a>
                </div>
                <div id="enlaces">
                    <h3>Enlaces Utiles</h3>
                    <a href="">Ayuda</a>
                    <a href="">App Movil gratis</a>
                </div>
            </div>
            <div id="redessociales">
                <button><span class="mdi--instagram"></span></button>
                <button><span class="mdi--twitter"></span></button>
                <button><span class="ic--baseline-facebook"></span></button>
            </div>
        </div>
@endsection