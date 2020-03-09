<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilos.css')}} ">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body>
    <header class="mb-3">
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
                      <a class="nav-link" href="/adminMarcas" target="_self">Admin Marcas</a>
                  </li>
      
                 
                  <li class="nav-item">
                      <a class="nav-link" href="/adminCategorias" target="_self">Admin Categorías</a>
                  </li>
      
      
                  <li class="nav-item">
                      <a class="nav-link" href="/adminProductos" target="_self">Admin Productos</a>
                  </li>
              </ul>
              <!-- links de la derecha -->
              <ul class="navbar-nav nav-flex-icons">
      
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
      
    </header>

    <main class="container mt-5">
        <h1>@yield('h1')</h1>

        @yield('main')

    </main>


    <footer class="footer">
        <div class="inner">
           &copy; <?= date('Y'); ?> Todos los derechos reservados
        </div>
    </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
