<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitación de Boda</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:wdth,wght@62.5..100,800&family=Vollkorn:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

<style>
        *{
            font-family: "Vollkorn", serif;
            font-optical-sizing: auto;
            font-weight: 800;
            font-style: normal; 
        }
        body {
            font-family: Arial, sans-serif;
            background: #c24616;
            margin: 0;
            padding: 0;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
        .invitacion {
            position: absolute;
            margin: 1rem;
            width: calc(100% - 2rem);
            height: auto;
            
        }
        h1, h2 {
            text-align: center;
            color: #c24616;
        }
        .centro{
            text-align: center;
            margin-top: 0;
            margin-bottom: 0;
            padding-bottom: 0
        }
        #novios{
            margin-top: 1rem;
        }
        #fin{
            margin-bottom: 2rem;
        }
        p {
            line-height: 1.5;
            color: black;
            text-align: justify;
        }
        #right{
            text-align: right;
        }
        .container {
            text-align: center;
            margin-top: 3rem;
            margin-bottom: 2rem;

        }
        .redirect-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: white; /* Color de fondo del botón */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Quita el subrayado */
            transition: background-color 0.3s ease;
            color: #c24616;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 1); /* Sombras */
            width: 12rem;
        }
        .redirect-button:hover{
            background: #a5a5a5;
        }
        #cont1{
            padding: 2rem;
            background-image: url("https://i.ibb.co/dkBynSp/434863424-2983351918479082-5362944842033567610-n.jpg"); /* Cambia los colores según tus preferencias */
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            padding-top: 9rem;
            position: relative;
            margin-top: 2.5rem;
        }
        #cont2{
            padding: 2rem;
            margin-top: 1.5rem;
            position: relative;
            background-image: url("https://i.ibb.co/bQpnBSK/432929330-2983354901812117-3972320739686591497-n.jpg"); /* Cambia los colores según tus preferencias */
            background-repeat: no-repeat;
            background-size: cover;
            background-position: bottom right;
            /* cambios */
            border: 1px solid red; 

        }
        #cont3{
            position: relative;
            height: 14rem;
        }
    .circulo:before {
        content: '';
        position: absolute;
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
        width: 2rem;
        height: 2rem;
        background-color: #c24616;
        border-radius: 50%;

    }
    .fotos{
        position: relative;
        border: 1px solid #c24616;
        padding: 2rem;
        margin-top: 1.5rem;
        background-image: url("https://scontent.fgye23-1.fna.fbcdn.net/v/t39.30808-6/432929330_2983354901812117_3972320739686591497_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeE_hUY8aywSIQdn5nHwutW4YI3p7e0kpV9gjent7SSlX8qGdQzGCQXUGraabALXbyRw8NQxzJ-XXnK7wycwWJve&_nc_ohc=tbeS90iKhtEAb4m9KAi&_nc_ht=scontent.fgye23-1.fna&oh=00_AfAxVqQ-St_hfT0IxuXzcKmTDePhsV5lFoBSA2mwMzFBZQ&oe=66155445"); /* Cambia los colores según tus preferencias */
        background-repeat: no-repeat;
        background-size: cover;
        background-position: bottom;
        height: 13rem;
    }
    #tl{
        position: absolute;
        top: 0.5rem;
        left: 0;
    }
    #tr{
        position: absolute;
        top: 0.5rem;
        right: 0;
    }
    #bl{
        position: absolute;
        bottom: 0;
        left: 0;
    }
    #br{
        position: absolute;
        bottom: 0;
        right: 0;
    }
    
    #bienvenida{
        transition: opacity 20s ease-in-out; /* Transición para la propiedad de opacidad */
    }

    .bienvenida {
    text-align: center;
    opacity: 1;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 100;
    height: 100%;
    width: 100%;
    background-image: url("https://i.ibb.co/0s2RJfW/435008679-2983330628481211-7449787089086534391-n.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display: flex;
    }

    .hidden {
        background: transparent;
        pointer-events: none; /* Evita que el usuario pueda interactuar con el mensaje después de desaparecer */
    }
    #mapa{
        border: 1px solid rgb(114, 114, 114);
        margin-bottom: 3rem;
    }

    /* Carrusel de Imagen */
    .carrusel {
    overflow-x: auto;
    white-space: nowrap;
    width: calc(100% - 1rem);
    height: 11rem; /* Altura del carrusel */
    margin-bottom: 20px; /* Margen inferior para evitar solapamientos */
    position: absolute;
    top: 4rem;
    left: 0.5rem;
    }

    .slide {
        display: inline-block;
        width: 10rem;
        height: 10rem;
        margin-right: 0.5rem;
    }

    img {
        width: 9.6rem;
        height: 9.6rem;
        border-radius: 1rem;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 1); /* Sombras */
    }
    #Tfotos{
        position: absolute;
        top: 0;
        left:0;
        width: 100%;
    }
    #titulo{
        text-shadow: 
        -2px -2px 0 white,  
         2px -2px 0 white,
        -2px  2px 0 white,
         2px  2px 0 white;    
    }
    #yt{
        position: absolute;
        width: 100%;
        height: 15rem;
    }
    #name{
        width: 12rem;
        margin: 1rem;
    }
</style>

</head>
<body>
    <div class="bienvenida" id="bienvenida">
    </div>

    <div class="invitacion">
        <div id="cont3">
            <div id="yt">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kcE3QLUDfN4?si=Fjlz20Uz8d1fQ256&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>

        <div id="cont1">
            <div class="circulo" id="tl"></div>
            <div class="circulo" id="tr"></div>
            <div class="circulo" id="bl"></div>
            <div class="circulo" id="br"></div>

            <h1 id="titulo">CON LA BENDICION DE DIOS Y DE NUESTROS PADRES</h1>
            <p class="centro">Manolo Carrillo Landin</p>
            <p class="centro">Cristina Segura Zambrano</p>
            <p class="centro">-- & --</p>
            <p class="centro">Moises Yanzapanta Chicaiza</p>
            <p class="centro" id="fin">Celia Capuz Moreta</p>

            <p>Nos llena de alegría anunciar que nos uniremos en matrimonio. Tu presencia será un honor mientras celebramos este día tan especial.</p>
            <p>La ceremonia será seguida de una recepción llena de amor y felicidad.</p> 
            <p>Esperamos sinceramente que puedas acompañarnos en este momento único.</p> 
            <br>
            <p id="right">Con amor,</p>
            <p id="right">Cristhian y Jessica</p>

            <div class="container">
                <form id="whatsapp_form" action="https://wa.me/+593995737927" method="get" target="_blank">
                    <input type="hidden" id="message" name="text" value="">
                    <input type="text" id="name" name="name" placeholder="Ingresa tu Nombre" required>
                    <br>
                    <button type="button"  class="redirect-button" onclick="sendMessage()">Confirmar</button>
                </form>
                
                <script>
                    function sendMessage() {
                        var name = document.getElementById("name").value;
                        var message = "Hola Queridos novios soy " + name + ", deseo poder confirmar mi asistencia para este dia tan especial."; // Aquí está el mensaje con el corazón
                        document.getElementById("message").value = message;
                        document.getElementById("whatsapp_form").submit();
                    }
                </script>            
            </div>

        </div>

        <div id="cont2">
            <div class="circulo" id="tl"></div>
            <div class="circulo" id="tr"></div>
            <div class="circulo" id="bl"></div>
            <div class="circulo" id="br"></div>
            <h2>Detalles de Evento:</h2>
            <p>Fecha: 6 de Julio del 2024</p>
            <p>Hora: 17h30</p>
            <p>Lugar: Costa Nouba</p>
            <div id="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7973.852530751817!2d-79.99441528512266!3d-2.1816776304245185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d73733dc66681%3A0x12fedecefcc24ca1!2sCosta%20Nouba%20%C3%81rea%20de%20Eventos!5e0!3m2!1ses-419!2sec!4v1712247741444!5m2!1ses-419!2sec" width="100%" height="50%" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                document.getElementById("bienvenida").classList.remove("bienvenida");
                document.getElementById("bienvenida").classList.add('hidden');
            }, 4000); // Después de 3 segundos
        });

    </script>

</body>


</html>