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
            <th>Nombre</th>
            <th>Género Musical</th>
            <th>País</th>
            <th>Fecha de Nacimiento</th>
            <th>Biografía</th>
            <th>Foto</th>
            <th>Fecha de Creación del Registro</th>
            <th>Fecha de Última Actualización</th>
        </thead>
        <tbody>

        @foreach ($datos as $item)
            <tr>
                <td class="">{{$item->id}}</td>
                <td class="">{{$item->nombre}}</td>
                <td class="">{{$item->genero_musical}}</td>
                <td class="">{{$item->pais}}</td>
                <td class="">{{$item->fecha_nacimiento}}</td>
                <td class="">{{$item->biografia}}</td>
                <td class="">{{$item->foto}}</td>
                <td class="">{{$item->updated_at}}</td>
                <td class="">{{$item->created_at}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection


