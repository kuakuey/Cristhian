@extends('layouts.spotify')

@section('title', "Spotify - Tabla de Quejas")

@section('style')
<link rel="stylesheet" href="{{ asset('css/tbartistas.css')}}">
@endsection

@section('content')
<div id="PresentacionTabla">
    <table class="table table-sm table-bordered">
        <thead>
            <th>ID</th>
            <th>Nombre Album</th>
            <th>Nombre Artista</th>
            <th>Genero Musical</th>
            <th>Reproducciones</th>
            <th>Popularidad</th>

        </thead>

        <tbody>
            @foreach ($datos as $item)
                <tr>
                    <td class="">{{$item->id_album}}</td>
                    <td class="">{{$item->nombrealbum}}</td>
                    <td class="">{{$item->nombre}}</td>
                    <td class="">{{$item->genero_musical}}</td>
                    <td class="">{{$item->reproducciones}}</td>
                    <td class="">{{$item->popularidad}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


