@extends('layouts.plantilla')

@section('title', 'Iniciar Sesion')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/iconos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">

@endsection

@section('content')
<div id="cont">
    <div id="cabecera">
        <a href="/">
            <div id="logo">
                <div><span class="bi--spotify"></span></div>
                <div><h3>Spotify</h3></div>
            </div>
        </a>
    </div>
    <div id="cuerpo">
        <div id="form">
            <h1>Inicia sesion en Spotify</h1>
            <div id="opcsesion">
                    <div id="cont1"><a href="/"><button>Continuar con Google</button></a></div>
                    <div id="cont1"><a href=""><button>Continuar con Facebook</button></a></div>
                    <div id="cont1"><a href=""><button>Continuar con Apple</button></a></div>
                    <div id="cont1"><a href=""><button>Continuar con numero de telefono</button></a></div>
            </div>

            <div id="formulario-general">
                <form action="" method="post" id="formularioin">
                    <div id="log"><h4 >Email o Nombre de usuario</h4></div>
                    <div><input type="text"></div>
    
                    <div><h4>Contraseña</h4></div>
                    <div><input type="text"></div>
     
                    <div><h4>Recordarme</h4></div>
                    <div><button type="button" id="iniciar">Iniciar Sesion</button></div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection