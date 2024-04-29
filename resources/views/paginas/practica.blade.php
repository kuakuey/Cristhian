@extends('layouts.plantilla')

@section('title', 'GSAP')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/practica.css')}}">

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CustomWiggle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>



@endsection

@section('content')

    <div class="contenedor">    
        <div class="cuadrado cuadrado_1" id="cuadrado1"></div>
        <div class="cuadrado cuadrado_2" id="cuadrado2"></div>
        <div class="cuadrado cuadrado_3" id="cuadrado3"></div>
        <div class="cuadrado cuadrado_4" id="cuadrado4"></div>
        <div class="cuadrado cuadrado_5" id="cuadrado5"></div>

    </div>

@endsection

@section('script')
{{-- <script src="{{ asset('javascript/boton.js')}}"></script> --}}
<script src="{{ asset('javascript/app.js')}}"></script>

@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animated Button</title>
  <link rel="stylesheet" href="{{ asset('css/practica.css')}}">
</head>
<body>

  <button id="animatedButton">
        boton
    <div class="circle"></div>
  </button>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CustomWiggle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  
    <script src="{{ asset('javascript/boton.js')}}"></script>
</body>
</html> --}}
