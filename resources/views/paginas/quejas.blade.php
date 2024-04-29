@extends('layouts.spotify')

@section('title', "Spotify - Quejas")

@section('style')
    <link rel="stylesheet" href="{{ asset('css/formulario.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection

@section('content')
    <div class="form">
        <h2>Formulario de Sugerencias</h2>

        <form action="{{route("storequejas")}}" method="post" class="formu">
            {{-- Para que sera esto... --}}
            @csrf 

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="email">Correo electrónico:</label>
            <input type="text" id="email" name="email" required autocomplete="off">
        
            <label for="queja">Descripción de la queja:</label>
            <textarea id="quejaTexArea" name="queja" id="queja" required autocomplete="off"></textarea>
        
            <input type="submit" value="Enviar">
            
                @if (session('success'))
                <script>
                    Swal.fire({
                    title: "Sugerencia",
                    text: "{{ session('success') }}",
                    icon: "success"
                    });
                </script>
                @endif  

        </for>
        <a href="{{route("MostrarQuejas")}}">Ver Base de Datos</a>
    </div>
@endsection


