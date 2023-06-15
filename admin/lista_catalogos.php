<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Lista de catálogos</title>
    <link rel="icon" type="image/png" href="../assets/brand/img/ico.ico"/>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600&display=swap" rel="stylesheet">
    <!-- font -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="catalogos.js"></script>
    
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

  <!-- <div class="container mt-5">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-calendar2-check-fill"></i> <strong>Eventos activos</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="eventos_baja.php"><i class="bi bi-calendar-x-fill"></i> Eventos inactivos</a>
      </li>
      
    </ul>
  </div> -->

  <div class="container-fluid w-75 h-100 mt-1 mb-5 p-5">
    <h2 class="mt-4 mb-5 text-dark text-center">
        <p><i class="bi bi-card-list display-1"></i></p><span class="display-5">Catálogo de categorías</span></h2>
        <!-- <form action="lista_eventos.php" method="POST">
        <div class="input-group mb-3 w-50">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar2-event-fill"></i></span>
          <input type="date" class="form-control" aria-describedby="basic-addon1" name="fecha">
          <button class="btn btn-primary" type="sumbit">Buscar</button>
        </div>
        </form> -->
        <hr>
        <p class="display-6 mb-3 mt-5 text-secondary"><i class="bi bi-droplet-fill"></i> Tipo de Sangre</p>
        <div class="row">
            <div class="col">
                <div class="input-group mb-4 w-100">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Filtro" aria-label="Filtro" aria-describedby="basic-addon1" id="myInput1">
                </div>
            </div>
            <div class="col text-end">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSangre"><i class="bi bi-plus-circle-dotted"></i> Agregar Tipo de sangre</a>
            </div>
        </div>

    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Tipo sangre</th>
            <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody id="myTable1">
          
        <?
        
        include ('query/query_catalogos.php');
        $x = 0;
        while($rowSangre = $resultadosqlSangre->fetch_assoc()){
          $x++;
          echo'
          <tr>
            <td>'.$x.'</td>
            <td>'.$rowSangre['tipo_sangre'].'</td>
            <td class="">
            <a href="#" data-bs-toggle="modal" data-bs-target="#editarSangre'.$rowSangre['id'].'"><span class="badge text-bg-light">Editar <i class="bi bi-pencil-square"></i></span><a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#eliminarSangre'.$rowSangre['id'].'"><span class="badge text-bg-light">Eliminar <i class="bi bi-caret-down-fill text-danger"></i></span><a>
            </td>
          </tr>
          ';

          echo'
          <!-- editar sangre -->
          <div class="modal fade bg-info" id="editarSangre'.$rowSangre['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Sangre</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="prcd/proceso_editar_sangre.php" method="POST">
                <input value="'.$rowSangre['id'].'" name="id" hidden>
                <div class="modal-body">
                  <p class="text-center">¿Deseas editar la categoría<strong> '.$rowSangre['tipo_sangre'].'?</strong></p>
                  <p class="text-center">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1"><i class="bi bi-droplet-fill"></i></span>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="'.$rowSangre['tipo_sangre'].'" name="tipo_sangre" required>
                    </div>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Editar</button>
                </form>
                </div>
              </div>
            </div>
          </div>

          ';
          echo'
          <!-- Eliminar sangre -->
          <div class="modal fade bg-danger" id="eliminarSangre'.$rowSangre['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="prcd/proceso_eliminar_sangre.php" method="POST">
                <input value="'.$rowSangre['id'].'" name="id" hidden>
                <div class="modal-body">
                <p class="text-center">¿Deseas eliminar la categoría<strong> '.$rowSangre['tipo_sangre'].'?</strong></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                </div>
              </div>
            </div>
          </div>

          ';
        }
        ?>
        </tbody>
    </table>
    
        <hr>
        <p class="display-6 mb-3 mt-5 text-secondary"><i class="bi bi-123"></i> Semestre</p>
        <div class="row">
            <div class="col">
                <div class="input-group mb-4 w-100">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Filtro" aria-label="Filtro" aria-describedby="basic-addon1" id="myInput2">
                </div>
            </div>
            <div class="col text-end">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSemestre"><i class="bi bi-plus-circle-dotted"></i> Agregar Semestre</a>
            </div>
        </div>

    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Semestre</th>
            <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody id="myTable2">
          
        <?
        
       
        $x = 0;
        while($rowSemestre = $resultadosqlSemestre->fetch_assoc()){
          $x++;
          echo'
          <tr>
            <td>'.$x.'</td>
            <td>'.$rowSemestre['semestre'].'</td>
            <td class="">
            <a href="#" data-bs-toggle="modal" data-bs-target="#editarSemestre'.$rowSemestre['id'].'"><span class="badge text-bg-light">Editar <i class="bi bi-pencil-square"></i></span></a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#eliminarSemestre'.$rowSemestre['id'].'"><span class="badge text-bg-light">Eliminar <i class="bi bi-caret-down-fill text-danger"></i></span></a>
            </td>
          </tr>
          ';
          echo'
          <!-- Editar semestre -->
          <div class="modal fade bg-info" id="editarSemestre'.$rowSemestre['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Semestre</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="prcd/proceso_editar_semestre.php" method="POST">
                <input value="'.$rowSemestre['id'].'" name="id" hidden>
                <div class="modal-body">
                <p class="text-center">¿Deseas editar la categoría<strong> '.$rowSemestre['semestre'].'?</strong></p>
                <p class="text-center">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1"><i class="bi bi-123"></i></span>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="'.$rowSemestre['semestre'].'" name="semestre" required>
                    </div>
                </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Editar</button>
                </form>
                </div>
              </div>
            </div>
          </div>

          ';
          echo'
          <!-- Eliminar semestre -->
          <div class="modal fade bg-danger" id="eliminarSemestre'.$rowSemestre['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="prcd/proceso_eliminar_semestre.php" method="POST">
                <input value="'.$rowSemestre['id'].'" name="id" hidden>
                <div class="modal-body">
                <p class="text-center">¿Deseas eliminar la categoría<strong> '.$rowSemestre['semestre'].'?</strong></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
                </form>
              </div>
            </div>
          </div>

          ';
        }
        ?>
        </tbody>
    </table>

        <hr>
        <p class="display-6 mb-3 mt-5 text-secondary"><i class="bi bi-buildings-fill"></i> Unidad académica</p>
        <div class="row">
            <div class="col">
                <div class="input-group mb-4 w-100">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Filtro" aria-label="Filtro" aria-describedby="basic-addon1" id="myInput3">
                </div>
            </div>
            <div class="col text-end">
                  <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUAcademica"><i class="bi bi-plus-circle-dotted"></i> Agregar Unidad Académica</a>
            </div>
        </div>

    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Estatus</th>
            <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody id="myTable3">
          
        <?
        
       
        $x = 0;
        while($rowUAcademica = $resultadoUAcademica->fetch_assoc()){
          $x++;
          echo'
          <tr>
            <td>'.$x.'</td>
            <td>'.$rowUAcademica['unidad_academica'].'</td>
            <td class="">
            <a href="#" data-bs-toggle="modal" data-bs-target="#editarUAc'.$rowUAcademica['id'].'"><span class="badge text-bg-light">Editar <i class="bi bi-pencil-square"></i></span></a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#eliminarUAc'.$rowUAcademica['id'].'"><span class="badge text-bg-light">Eliminar <i class="bi bi-caret-down-fill text-danger"></i></span></a>
            </td>
          </tr>
          ';

          echo'
          <!-- Editar Unidad Académica -->
          <div class="modal fade bg-info" id="editarUAc'.$rowUAcademica['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Unidad Académica</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="prcd/proceso_editar_unidad_academica.php" method="POST">
                <input value="'.$rowUAcademica['id'].'" name="id" hidden>
                <div class="modal-body">
                  <p class="text-center">¿Deseas editar la categoría<strong> '.$rowUAcademica['unidad_academica'].'?</strong></p>
                  <p class="text-center">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1"><i class="bi bi-buildings-fill"></i></span>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="'.$rowUAcademica['unidad_academica'].'" name="unidad_academica" required>
                    </div>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Editar</button>
                </form>
                </div>
              </div>
            </div>
          </div>

          ';
      
          echo'
          <!-- Eliminar Unidad Académica -->
          <div class="modal fade bg-danger" id="eliminarUAc'.$rowUAcademica['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="prcd/proceso_eliminar_unidad_academica.php" method="POST">
                <input value="'.$rowUAcademica['id'].'" name="id" hidden>
                <div class="modal-body">
                  <p class="text-center">¿Deseas eliminar la categoría<strong> '.$rowUAcademica['unidad_academica'].'?</strong></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
                </form>
              </div>
            </div>
          </div>

          ';
        }
        ?>
        </tbody>
    </table>

        <hr>
        <p class="display-6 mb-3 mt-5 text-secondary"><i class="bi bi-bank"></i> Programa</p>
        <div class="row">
            <div class="col">
                <div class="input-group mb-4 w-100">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Filtro" aria-label="Filtro" aria-describedby="basic-addon1" id="myInput4">
                </div>
            </div>
            <div class="col text-end">
                  <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPrograma"><i class="bi bi-plus-circle-dotted"></i> Agregar Programa</a>
            </div>
        </div>

    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Estatus</th>
            <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody id="myTable4">
          
        <?
        
        
        $x = 0;
        while($rowPrograma = $resultadoPrograma->fetch_assoc()){
          $x++;
          echo'
          <tr>
            <td>'.$x.'</td>
            <td>'.$rowPrograma['programa'].'</td>
            <td class="">
            <a href="#" data-bs-toggle="modal" data-bs-target="#editarPrograma'.$rowPrograma['id'].'"><span class="badge text-bg-light">Editar <i class="bi bi-pencil-square"></i></span></a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#eliminarPrograma'.$rowPrograma['id'].'"><span class="badge text-bg-light">Eliminar <i class="bi bi-caret-down-fill text-danger"></i></span></a>
            </td>
          </tr>
          ';

          echo'
          <!-- Editar Programa -->
          <div class="modal fade bg-info" id="editarPrograma'.$rowPrograma['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Programa</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="prcd/proceso_editar_programa.php" method="POST">
                <input value="'.$rowPrograma['id'].'" name="id" hidden>
                <div class="modal-body">
                  <p class="text-center">¿Deseas editar la categoría<strong> '.$rowPrograma['programa'].'</strong>?</p>
                  <p class="text-center">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1"><i class="bi bi-bank"></i></span>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="'.$rowPrograma['programa'].'" name="programa" required>
                    </div>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Editar</button>
                </form>
                </div>
              </div>
            </div>
          </div>

          ';
          echo'
          <!-- Eliminar Programa -->
          <div class="modal fade bg-danger" id="eliminarPrograma'.$rowPrograma['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="prcd/proceso_eliminar_programa.php" method="POST">
                <input value="'.$rowPrograma['id'].'" name="id" hidden>
                <div class="modal-body">
                  <p class="text-center">¿Deseas eliminar la categoría<strong> '.$rowPrograma['programa'].'</strong>?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
                </form>
              </div>
            </div>
          </div>

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
  </body>
</html>

<!-- Modal's de catálogos -->
<!-- Sangre -->
<div class="modal fade" id="modalSangre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-plus-circle-dotted"></i> Agregar Tipo de Sangre</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="prcd/proceso_alta_sangre.php" method="POST">
      <div class="modal-body">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-droplet-fill"></i></span>
          <input type="text" class="form-control" placeholder="Tipo de Sangre" aria-label="Tipo de Sangre" aria-describedby="basic-addon1" name="sangre" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Semestre -->
<div class="modal fade" id="modalSemestre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-plus-circle-dotted"></i> Agregar Semestre</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="prcd/proceso_alta_semestre.php" method="POST">
      <div class="modal-body">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-123"></i></span>
          <input type="text" class="form-control" placeholder="Semestre" aria-label="Semestre" aria-describedby="basic-addon1" name="semestre" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Unidad académica -->
<div class="modal fade" id="modalUAcademica" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-plus-circle-dotted"></i> Agregar Unidad Académica</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="prcd/proceso_alta_unidad_academica.php" method="POST">
      <div class="modal-body">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-buildings-fill"></i></span>
          <input type="text" class="form-control" placeholder="Unidad académica" aria-label="Unidad académica" aria-describedby="basic-addon1" name="unidad_academica" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Programa -->
<div class="modal fade" id="modalPrograma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-plus-circle-dotted"></i> Agregar Programa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="prcd/proceso_alta_programa.php" method="POST">
      <div class="modal-body">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-bank"></i></span>
          <input type="text" class="form-control" placeholder="Programa" aria-label="Programa" aria-describedby="basic-addon1" name="programa" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal's de catálogos -->