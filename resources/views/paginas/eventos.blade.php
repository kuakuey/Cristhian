@extends('layouts.plantilla')

@section('title', 'Eventos')

@section('style')
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CustomWiggle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>


    
@endsection

@section('content')
    <form name="formValidation" id="formValidation" action="" method="get" autocomplete="off">
        <div><h1>Eventos de Formulario</h1></div>
        <div>Nombre: <input type="text" id="nombre"></div><br>
        <div>Correo: <input type="email" id="correo" ></div><br>
        <div>Url: <input type="text" id="url"></div><br>
        <div>Provicincia: 
            <select name="" id="opciones">
                <option value="op1">op1</option>
                <option value="op2">op2</option>
                <option value="op3">op3</option>
            </select></div><br>
        <div>Sexo: 
            <input type="radio" name="genero" value="H" id="">Hombre
            <input type="radio" name="genero" value="M" id="">Mujer</div><br>
        <div><input type="submit" id="btnEnvio" value="Enviar"></div>        
    </form>

    <br>
    
    
    <div class="cuadrado cuadrado_1" id="cuadrado1"><h3 id="mensaje"></h3></div>
    <h1>Coordenada: <h1 id="coordenadas"></h1></h1>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            position: absolute;
            width: 100%;
            height: 100%;
        }
        .cuadrado{
            width: 50px;
            height: 50px;
            margin-bottom: 20px;
        }
        .cuadrado_1{
            background: red;
        }
    </style>
@endsection

@section('script')
<script src="{{ asset('javascript/eventos.js')}}"></script>

@endsection