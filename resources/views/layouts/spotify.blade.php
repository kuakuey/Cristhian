<html lang="en"><head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
    <link rel="stylesheet" href="{{ asset('css/iconos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/response-home.css')}}">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,-25">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iconify/2.0.0/iconify.min.js" integrity="sha512-lYMiwcB608+RcqJmP93CMe7b4i9G9QK1RbixsNu4PzMRJMsqr/bUrkXUuFzCNsRUo3IXNUr5hz98lINURv5CNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>   
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Konkhmer+Sleokchher&family=Noto+Serif+Display:wdth,wght@62.5..100,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Vollkorn:wght@800&display=swap" rel="stylesheet">
    
    @yield('style')

</head>
<body id="body">
    <div id="ventana-principal">
        <div id="nav">
            <div id="div1">
                <div id="menu">
                    <a href="/"><span class="bi--spotify"></span>Spotify</a>
                    <a href="/"><span class="material-symbols-outlined">home</span>Inicio</a>
                    <a href=""><span class="material-symbols-outlined">search</span>Buscar</a>
                </div>
            </div>

            <div id="div2">
                <div id="biblioteca">
                    <div id="section_list">
                        <div id="sectbib"><a href=""><span class="material-symbols-outlined">collections_bookmark</span>Tu biblioteca</a></div>
                        <div><a id="add" href=""><span class="material-symbols-outlined">add</span></a></div>                   
                    </div>
                    <div id="playlist">
                        <div id="inf">
                            <div><h3>Crea tu primera Playlist</h3></div>
                            <div><h5>¡Es muy facil! Te vamos a ayudar</h5></div>
                            <div><button>Crear Playlist</button></div>
                        </div>
                        <div id="inf">
                            <div><h3>Busquemos algunos podcasts para seguir</h3></div>
                            <div><h5>Te mantendremos al tanto de los nuevos episodios.</h5></div>
                            <div><button>Explorar podcasts</button></div>
                        </div>
                    </div>
                    <div id="terminos">
                        <div class="term"><a href="">Legal</a></div>
                        <div class="term"><a href="">Seguridad y Centro de Privacidad</a></div>
                        <div class="term"><a href="">Politica de Privacidad</a></div>
                        <div class="term"><a href="">Sobre los anuncios</a></div>
                        <div class="term"><a href="">Accesibilidad</a></div>
                        <div class="term"><a href="">Notice at Collection</a></div>
                        <div class="term"><a href="">Your Privacy Choices</a></div>
                        <div class="term"><a href="">Cookies</a></div>
                        <div class="term"><a href="{{route("quejas")}}">Sugerencias</a></div>
                        <div class="term"><a href="{{route("MostrarArtistas")}}">Tabla de Artistas</a></div>
                        <div class="term"><a href="{{route("MostrarAlbum")}}">Tabla de Album</a></div>

                    </div>
                    <div id="idioma"><a href="">Espanol en Latinoamerica</a></div>
                </div>
            </div>
        </div>    
            
        <div id="content">
            <div id="cont1">
                <div id="login">
                    <div id="movil">
                        <div>
                            <a href="{{route("home")}}"><span class="bi--spotify"></span></a>
                        </div>
                        <div id="contmovil">
                            <a href=""><span class="material-symbols--search"></span></a>
                            <a href="" id="abrir">Abrir Aplicacion</a>
                            <a href=""><span class="mingcute--menu-fill"></span></a>
                        </div>
                    </div>
                
                    <div id="web">
                        <div>
                            <a href=""><span class="teenyicons--double-caret-left-circle-solid"></span></a>
                            <a href=""><span class="teenyicons--double-caret-right-circle-solid"></span></a>
                        </div>
                        <div>
                            <button class="btn-opcionlogin" id="regis">Registrate</button>
                            <a href="http://127.0.0.1:8000/login"><button class="btn-opcionlogin" id="iniciarsesion">Iniciar Sesion</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="cont2">
                <div id="prueba">
                    <div id="contenido">
                            @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>

<script>
    @yield('script')
</script>


</html>

