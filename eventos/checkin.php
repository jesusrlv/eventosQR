<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Check-in</title>
    <link rel="icon" type="image/png" href="../assets/brand/img/SmartEventICOLight.ico"/>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600&display=swap" rel="stylesheet">
    <!-- font -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- swal -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="instascan.min.js"></script>

    <?php
      
      $idEventos = $_POST['evento'];
      include('../admin/query/query_eventos.php');
      $rowEventos = $resultadoEventoQR->fetch_assoc();
    ?>

    <audio id="myAudio">
      <source src="beep.mp3" type="audio/mpeg">
    </audio>

    <style>
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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>
  <body onunload="cerrarPagina()">
<main class="mb-0">
  <header class="p-3" style="background-color:#8a608a;">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="../assets/brand/img/SmartEventLogoLight.png" width="auto" height="70" role="img" alt="">        
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 ms-4 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-light">Eventos</a></li>
        </ul>

        <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form> -->

        <div class="text-end">
          <!-- <button type="button" class="btn btn-outline-light me-2">Login</button> -->
          <a href="prcd/sort.php" type="button" class="btn btn-light">Salir</a>
        </div>
      </div>
    </div>
  </header>

  <div class="b-example-divider">
    <h4 class="text-secondary ms-5 mt-2 mb-4">NOMBRE DEL EVENTO: <span class="text-dark"><strong><?php echo $rowEventos['nombre'] ?></strong></span></h4>
  </div>

  <div class="container-fluid w-100 h-100" style="width:100%">
    <div class="row mb-0 border-bottom">
      <div class="col-4 border-end p-3 align-self-center" style="background-color:#f8f9fa;">
        <div class="container p-5 border rounded bg-white shadow-sm" style="font-family: 'Poppins', sans-serif;">

          <p style="font-size:90px" class="text-center border-bottom mb-3">
            <img src="../assets/brand/img/Novios.png" alt="" width="170px" id="logo_lateral">
          </p>

          <div id="checkDiv" class="mt-3">
            <p class="pb-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Nombre:</strong>
              Nombre 
            </p>
            <p class="pb-3 mt-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark"># de Mesa:</strong>
              No. de Mesa asignada
            </p>
            <!-- <p class="pb-3 mt-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Especialidad:</strong>
              Especialidad
            </p>
            <p class="pb-3 mt-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Semestre:</strong>
              Semestre
            </p>
            <p class="pb-3 mt-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Carrera:</strong>
              Carrera
            </p> -->
          </div>

        </div>
      </div>
      <div class="col-7 border-start align-self-center justify-content-center">
        <p><button class="btn btn-primary ms-2" onclick="abrirCamara()"><i class="bi bi-qr-code"></i> Leer QR</button> <button class="btn btn-danger"  id="botonCerrar"><i class="bi bi-qr-code"></i> Cerrar QR</button></p>
        <div class="card w-75 text-center" style="height:500px">
          <div class="card-header text-light" style="background-color:#8a608a;">
          <i class="bi bi-camera-fill"></i> Cámara de registro de asistentes
          </div>
            <div class="card-body text-center">
              <img src="../assets/brand/img/SmartEventAlpha.png" style="max-width: 400px;"  alt="" id="imagenFCA">
              <video id="preview" class="w-100 h-100" style="max-height:810px" hidden></video>  
          </div>
          <p hidden><input type="text" id="textQR" onchange="checkIn()"></p>
          <p hidden><input type="text" id="evento" value="<?php echo $idEventos ?>"></p>

      </div>

    </div>
  </div>
  
</main>
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">&copy; 2022 UACYA | UAZ</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <img src="../assets/brand/img/SmartEventLogoLight.png" width="auto" height="80" role="img" alt="" class="p-2 rounded" style="background-color:#b0b8b4;">
        </a>

        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Eventos</a></li>
        </ul>
      </footer>
    </div> 
  </body>
</html>
