<!DOCTYPE html>
<html lang="es">
 

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Fuente para el proyecto Ecommerce Digital House-->
   <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
   

    <!-- CSS personalizado de cada formulario -->
    <!--<link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/login.css"> -->
</head>

<body>

   <!-- Inicio Navbar, fixed-top-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- la marca del comercio-->
        <a href="https://icon-library.net/icon/s-app-icon-2.html" title="S App Icon #38237"><img src="https://icon-library.net//images/s-app-icon/s-app-icon-2.jpg" width="30" /></a>
        <a class="navbar-brand" href="" target="_self">
            <strong class="blue-text">SHEIN</strong>
            
        </a>
        <!-- botón hamburguesa en collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- collapse -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- links de la izquierda -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/inicio">Inicio
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/sobreNosotros" target="_self">Sobre Nosotros</a>
            </li>

           
            <li class="nav-item">
                <a class="nav-link" href="/preguntasFrecuentes" target="_self">Preguntas frecuentes</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="/contacto" target="_self">Contacto</a>
            </li>
        </ul>
        <!-- links de la derecha -->
        <ul class="navbar-nav nav-flex-icons">
            @guest
            <li class="nav-item">
                <a class="nav-link" href="/register" target="_self">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login" target="_self">Login</a>
            </li>
            @else
            <li class="nav-item nav-link">
                {{ 'Hola ' . auth()->user()->name }}
            </li>

            <li><a class="nav-link" href="/inicio" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">Cerrar Sesión</a>
            </li>
            @endguest
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <li class="nav-item">
                <a href="https://www.facebook.com" class="nav-link" target="_blank">
                <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://www.twitter.com" class="nav-link" target="_blank">
                <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://www.instagram.com" class="nav-link" target="_blank">
                <i class="fab fa-instagram"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="vistaCarritoCompras.php">

                <i class="fas fa-shopping-cart" >4</i>
               <!-- <span class="clearfix d-none d-sm-inline-block"> Carrito </span> -->
                <!-- <span class="badge red z-depth-1 mr-1">1</span> -->
                </a>
            </li>

        </ul>
    </div>
    </div>
</nav> <!-- Fin Navbar, fixed-top-->

   

        @yield('main')


<!-- INICIO FOOTER -->
<footer class="page-footer text-center font-small mt-5 bg-dark">

    <div class="pt-4">
        <a class="btn-outline-light pl-3 pr-3" href="/inicio" target="_self" role="button">Inicio</a>
        <a class="btn-outline-light pl-3 pr-3" href="/sobreNosotros" target="_self" role="button">Sobre Nosotros</a>
        <a class="btn-outline-light pl-3 pr-3" href="/perfil" target="_self" role="button">Perfil</a>
        <a class="btn-outline-light pl-3 pr-3" href="/preguntasFrecuentes" target="_self" role="button">Preguntas frecuentes</a>
        <a class="btn-outline-light pl-3 pr-3" href="/contacto" target="_self" role="button">Contacto</a>
        <a class="btn-outline-light pl-3 pr-3" href="/register" target="_self" role="button">Registro</a>
        <a class="btn-outline-light pl-3 pr-3" href="/login" target="_self" role="button">Login</a>
    </div>
  
    <div class="p-4">
        <a href="https://www.facebook.com" target="_blank">
            <i class="fab fa-facebook-f mr-3"></i>
        </a>
        <a href="https://twitter.com" target="_blank">
            <i class="fab fa-twitter mr-3"></i>
        </a>
        <a href="https://www.youtube.com" target="_blank">
            <i class="fab fa-youtube mr-3"></i>
        </a>
        <a href="https://plus.google.com" target="_blank">
            <i class="fab fa-google-plus-g mr-3"></i>
        </a>
    </div>

</footer>
<!-- FIN FOOTER -->


    <!-- script jquery, popper y bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>


</html>