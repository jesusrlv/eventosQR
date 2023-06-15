<?php
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Inicio</title>
    <link rel="icon" type="image/png" href="../assets/brand/img/ico.ico"/>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">


    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600&display=swap" rel="stylesheet">
    <!-- font -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
       #transition {
        background-color:#ffc107;
        border: none;
        padding: 16px 32px;
        transition: 0.3s;
      }
      #transition:hover {
        background-color:#000e42;
        color: white;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      /* On screens that are 992px wide or less, go from four columns to two columns */
      /* tablets, celular horizontal y otros dispositivos */
      @media screen and (max-width: 2000px) {
        #transition{
          height: 60rem;
        }
        
      }
      /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
      /* CELULAR */
      @media screen and (max-width: 600px) {
        #transition{
          height: 36rem;
         
        }
          
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
  </head>
  <body>
<main class="mb-0">
  <header class="p-3" style="background-color:#000e42;">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="../assets/brand/img/logo.png" width="120" height="36" role="img" alt="">        
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 ms-4 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary"><i class="bi bi-houses"></i> Inicio</a></li>
          <li><a href="alta_eventos.php" class="nav-link px-2 text-light"><i class="bi bi-plus-circle-fill"></i> Agregar evento</a></li>
          <li><a href="alta_sitio.php" class="nav-link px-2 text-light"><i class="bi bi-plus-circle-fill"></i> Agregar sitio</a></li>
          <li><a href="alta_asistentes.php" class="nav-link px-2 text-light"><i class="bi bi-plus-circle-fill"></i> Pre-registro</a></li>
          <li><a href="lista_eventos.php" class="nav-link px-2 text-light"><i class="bi bi-list-check"></i> Lista eventos</a></li>
          <li><a href="lista_asistentes.php" class="nav-link px-2 text-light"><i class="bi bi-list-check"></i> Lista asistentes</a></li>
        </ul>

        <div class="text-end">
          <!-- <button type="button" class="btn btn-outline-light me-2">Login</button> -->
          <a href="query/sort.php" type="button" class="btn btn-warning">Salir</a>
        </div>
      </div>
    </div>
  </header>

  <div class="b-example-divider">
  </div>

  <h3 class="ms-5 mt-5 text-secondary">Bienvenido <strong class="text-dark"></strong></h3>

    <div class="container-fluid w-100 h-100 mt-5 mb-5 p-5">
      <div class="container text-center">
      <img src="../assets/brand/img/somos_fca_halcon_azul_15.png" width="270" height="" role="img" alt="" class="p-2" style="">
      <h1 class="mt-2 display-1 text-bold" style="font-family: 'Titillium Web', sans-serif;">Sistema de eventos<br>UACYA</h1>
      <p class="h3 text-bold text-secondary">Universidad Autónoma de Zacatecas</p>
      <hr>
        <div class="row mt-1 g-4">
          <div class="col-md-6">
            <div class="card mx-auto shadow-sm card-block" style="width: 100%; height:27rem" id="transition">
              <div class="card-body align-items-center d-flex flex-column justify-content-center">
                <h5 style="font-size:63px"><i class="bi bi-calendar-event-fill"></i></h5>
                <h5 class="card-title">Agregar evento</h5>
                <p class="card-text">Se agrega evento a la lista cargada en el sistema.</p>
                <a href="alta_eventos.php" class="card-link" style="text-decoration:none;"><i class="bi bi-plus-circle-fill"></i> Agregar evento</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mx-auto shadow-sm card-block" style="width: 100%; height:27rem" id="transition">
              <div class="card-body align-items-center d-flex flex-column justify-content-center">
                <h5 style="font-size:63px"><i class="bi bi-buildings-fill"></i></h5>
                <h5 class="card-title">Agregar sitio de visita</h5>
                <p class="card-text">Se agrega sitio de visita como la biblioteca o el centro de cómputo.</p>
                <p><a href="alta_sitio.php" class="card-link" style="text-decoration:none;"><i class="bi bi-plus-circle-fill"></i> Agregar sitio</a><a href="lista_asistentes_sitios.php" class="card-link" style="text-decoration:none;"><i class="bi bi-journal-text"></i> Reporte de sitio</a> </p>
              </div>
            </div>
          </div>
          
        </div>
        <div class="row mt-1 g-4">
          <div class="col-md-6">
            <div class="card mx-auto shadow-sm align-items-center" style="width: 100%; height:27rem" id="transition">
              <div class="card-body align-items-center d-flex flex-column justify-content-center">
                  <h5 style="font-size:63px"><i class="bi bi-people-fill"></i></h5>
                  <h5 class="card-title">Pre-Registro de asistentes</h5>
                  <p class="card-text">Se pre-cargan los asistentes al evento.</p>
                  <a href="alta_asistentes.php" class="card-link" style="text-decoration:none;"><i class="bi bi-plus-circle-fill"></i> Pre-registro</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mx-auto shadow-sm" style="width: 100%; height:27rem" id="transition">
              <div class="card-body align-items-center d-flex flex-column justify-content-center">
                <h5 style="font-size:63px"><i class="bi bi-list-check"></i></h5>
                <h5 class="card-title">Ver eventos cargados</h5>
                <p class="card-text">Listado de eventos cargados en el sistema.</p>
                <a href="lista_eventos.php" class="card-link" style="text-decoration:none;"><i class="bi bi-list-check"></i> Listado</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-1 g-4">
          <div class="col-md-6">
            <div class="card mx-auto shadow-sm" style="width: 100%; height:27rem" id="transition">
              <div class="card-body align-items-center d-flex flex-column justify-content-center">
                <h5 style="font-size:63px"><i class="bi bi-list-check"></i></h5>
                  <h5 class="card-title">Listado de asistentes</h5>
                  <p class="card-text">Listado de los asistentes al evento.</p>
                  <a href="lista_asistentes.php" class="card-link" style="text-decoration:none;"><i class="bi bi-list-check"></i> Listado</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mx-auto shadow-sm" style="width: 100%; height:27rem" id="transition">
              <div class="card-body align-items-center d-flex flex-column justify-content-center">
                <h5 style="font-size:63px"><i class="bi bi-list-columns-reverse"></i></h5>
                  <h5 class="card-title">Catálogos</h5>
                  <p class="card-text">Base de datos de catálogos.</p>
                  <a href="lista_catalogos.php" class="card-link" style="text-decoration:none;"><i class="bi bi-list-columns-reverse"></i> Catálogos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</main>
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-12 mb-0 text-muted"><a href="/" class="col-md-4 d-flex mb-md-0 me-md-auto link-dark text-decoration-none">
                <img src="../assets/brand/img/logo.png" width="140" height="45" role="img" alt="" class="p-2 rounded" style="background-color:#000e42">
            </a></p>
      
    </footer>
  </div>



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
