<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Lista de eventos</title>
    <link rel="icon" type="image/png" href="../assets/brand/img/ico.ico"/>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600&display=swap" rel="stylesheet">
    <!-- font -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
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
          <li><a href="index.php" class="nav-link px-2 text-light"><i class="bi bi-houses"></i> Inicio</a></li>
          <li><a href="alta_eventos.php" class="nav-link px-2 text-light"><i class="bi bi-plus-circle-fill"></i> Agregar evento</a></li>
          <li><a href="alta_asistentes.php" class="nav-link px-2 text-light"><i class="bi bi-plus-circle-fill"></i> Pre-registro</a></li>
          <li><a href="#" class="nav-link px-2 text-secondary"><i class="bi bi-list-check"></i> Lista eventos</a></li>
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

  <div class="container mt-5">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-calendar2-check-fill"></i> <strong>Eventos activos</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lista_eventos_baja.php"><i class="bi bi-calendar-x-fill"></i> Eventos inactivos</a>
      </li>
      
    </ul>
  </div>

  <div class="container-fluid w-75 h-100 mt-1 mb-5 p-5">
    <h3 class="mt-4 mb-3 text-dark"><i class="bi bi-calendar2-check-fill text-success"></i> Lista de eventos activos</h3>
        <form action="lista_eventos.php" method="POST">
        <div class="input-group mb-3 w-50">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar2-event-fill"></i></span>
          <input type="date" class="form-control" aria-describedby="basic-addon1" name="fecha">
          <button class="btn btn-primary" type="sumbit">Buscar</button>
        </div>
        </form>
        <hr>
        <div class="row">
            <div class="col">
                <div class="input-group mb-4 w-100">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Filtro" aria-label="Filtro" aria-describedby="basic-addon1" id="myInput">
                </div>
            </div>
            <div class="col text-end">
                <a href="alta_eventos.php" class="btn btn-outline-primary"><i class="bi bi-clipboard-plus-fill"></i> Crear evento</a>
            </div>
        </div>

    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Editar</th>
            <th scope="col">Nombre del evento</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Lugar</th>
            <th scope="col">Fecha</th>
            <th scope="col">Lista pagos</th>
            <th scope="col">Lista asistentes</th>
            <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody id="myTable">
          
        <?
        
        include ('query/query_eventos.php');
        $filas_resultado = $resultadoEvento->num_rows;
        if($filas_resultado >= 1 ){
        $x = 0;
        while($rowEvento = $resultadoEvento->fetch_assoc()){
          $x++;
          echo'
          <tr>
            <td>'.$x.'</td>

            <td><a href="#" data-bs-toggle="modal" data-bs-target="#editarEvento'.$rowEvento['id'].'"><span class="badge text-bg-light"><i class="bi bi-pencil-square"></i></span></a></td>

            <td>'.$rowEvento['nombre'].'</td>
            
            <td>'.$rowEvento['capacidad'].'</td>

            <td><span class="badge text-bg-light"><i class="bi bi-geo-fill text-primary"></i> '.$rowEvento['lugar'].'</span></td>

            <td><span class="badge text-bg-light"><i class="bi bi-calendar-event-fill text-danger"></i> '.$rowEvento['fecha'].'</span></td>

            <td class=""><a href="lista_pagos_asistentes.php?evento='.$rowEvento['id'].'"><span class="badge text-bg-light">Lista <i class="bi bi-list-check"></i></span></a></td>

            <td class=""><a href="lista_individual_asistentes.php?evento='.$rowEvento['id'].'"><span class="badge text-bg-light">Lista <i class="bi bi-list-check"></i></span></a></td>

            <td class=""><a href="#" data-bs-toggle="modal" data-bs-target="#editarEstatus'.$rowEvento['id'].'"><span class="badge text-bg-light">Baja <i class="bi bi-caret-down-fill text-danger"></i></span></a></td>
          </tr>
          ';

          echo '
          <!-- Modal editar estatus-->
          <div class="modal fade bg-info" id="editarEstatus'.$rowEvento['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Editar estatus del evento</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p class="text-center mt-3">Editar estatus del evento <strong>'.$rowEvento['nombre'].'</strong></p>
                  <div class="input-group mb-3">
                  <form action="prcd/proceso_editar_estatus_evento.php" method="POST">
                  <input value="'.$rowEvento['id'].'" name="id" hidden>
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar2-check-fill"></i></span>
                    <select class="form-select" aria-label="Default select example" name="estatus" required>
                      <option value="" selected>Cambiar estatus</option>
                      <option value="1">Evento Activo</option>
                      <option value="0">Evento Inactivo</option>
                    </select> 
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Editar estatus</button>
                </form>
                </div>
              </div>
            </div>
          </div>

          ';

          echo '
          <!-- Modal editar evento-->
          <div class="modal fade bg-info" id="editarEvento'.$rowEvento['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-pencil-square"></i> Editar datos del evento</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p class="text-center mt-3">Editar datos del evento<br><strong>'.$rowEvento['nombre'].'</strong></p>
                  <form action="prcd/proceso_editar_evento.php" method="POST">
                  <div class="input-group mb-3">
                  <input value="'.$rowEvento['id'].'" name="id" hidden>
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-type"></i></span>
                    <input type="text" class="form-control" placeholder="Nombre del evento" aria-label="Nombre del evento" aria-describedby="basic-addon1" value="'.$rowEvento['nombre'].'" required name="nombre">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-123"></i></span>
                    <input type="text" class="form-control" placeholder="Capacidad de asistentes" aria-label="Capacidad de asistentes" aria-describedby="basic-addon1" value="'.$rowEvento['capacidad'].'" required name="capacidad">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-geo-fill"></i></span>
                    <input type="text" class="form-control" placeholder="Lugar" aria-label="Lugar" aria-describedby="basic-addon1" value="'.$rowEvento['lugar'].'" required name="lugar">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar-check"></i></span>
                    <input type="date" class="form-control" placeholder="Fecha" aria-label="Fecha" aria-describedby="basic-addon1" value="'.$rowEvento['fecha'].'" required name="fecha">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Editar evento</button>
                </form>
                </div>
              </div>
            </div>
          </div>

          ';
        }
      }
      else{
        echo'
      <script>
      alert("No hay eventos registrados en las fechas solicitadas");
      </script>
      ';
      }
        ?>
        </tbody>
    </table>
   
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

<script>
    $(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>