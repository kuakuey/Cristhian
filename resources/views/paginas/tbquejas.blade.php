@extends('layouts.spotify')

@section('title', "Spotify - Tabla de Quejas")

@section('style')
<link rel="stylesheet" href="{{ asset('css/tbquejas.css')}}">
@endsection

@section('content')
<div id="PresentacionTabla">
    <table class="table table-sm table-bordered">
        <thead>
            <td>ID</td>
            <td>Nombre</td>
            <td>Correo</td>
            <td>Queja</td>
            <td>Updated</td>
            <td>Created</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </thead>
        <tbody>

        @foreach ($datos as $item)
            <tr>
                <td class="tbRow">{{$item->id}}</td>
                <td class="tbRow">{{$item->nombre}}</td>
                <td class="tbRow">{{$item->correo}}</td>
                <td class="tbRow">{{$item->queja}}</td>
                <td class="tbRow">{{$item->updated_at}}</td>
                <td class="tbRow">{{$item->created_at}}</td>
                <td><a>Editar</a></td>
                <td><a>Eliminar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection


