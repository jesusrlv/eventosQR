<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Alta sitio</title>
    <link rel="icon" type="image/png" href="../assets/brand/img/ico.ico"/>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>




    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600&display=swap" rel="stylesheet">
    <!-- font -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .pointer {cursor: pointer;}
     
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
          <li><a href="#" class="nav-link px-2 text-secondary"><i class="bi bi-plus-circle-fill"></i> Agregar evento</a></li>
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

    <div class="container-fluid w-75 h-100 mt-5 mb-5 p-5">
    <h3 class="mt-4 mb-3 text-secondary"><i class="bi bi-buildings-fill"></i> Alta de sitios</h3>

    <div class="row justify-content-center">
      <form action="prcd/proceso_alta_sitio.php" method="POST">
        <div class="col-12 border rounded p-4">
            <h3 class="mb-4 border-bottom">Datos del sitio</h3>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-buildings-fill"></i></span>
                <input type="text" class="form-control" placeholder="Nombre del sitio" aria-label="Nombre del sitio" aria-describedby="basic-addon1" name="sitio" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-buildings-fill"></i></span>
                  <select class="form-select" aria-label="Default select example" name="tipo_sitio" required>
                    <option value="" selected>Selecciona el tipo de sitio</option>
                    <option value="1">Biblioteca</option>
                    <option value="2">Centro de cómputo</option>
                    <option value="3">Otro</option>
                  </select>
            </div>
            <p class="w-100 text-end"><button class="btn btn-primary" type="submit"><i class="bi bi-buildings-fill"></i> Registrar</button></p>
        </form>
        </div>
    </div>
    <hr>
    <h3 class="mt-3 mb-2">Sitios registrados</h3>
    <table class="table table-hover text-center">
        <thead class="bg-dark text-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sitio</th>
                <th scope="col">Tipo</th>
                <th scope="col">Acción</th>
                <th scope="col">Estatus</th>
                </tr>
        </thead>
        <tbody>
            <? 
            $x = 0;
            include('query/query_sitios.php');
            while($rowSitio = $resultadoSitio->fetch_assoc()){
                $x++;
                echo'
                <tr>
                    <td>'.$x.'</td>
                    <td>'.$rowSitio['sitio'].'</td>';

                    if($rowSitio['tipo_sitio'] == 1){
                      echo'
                      <td>
                          <a class="pointer" title="Tipo sitio" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Biblioteca" data-bs-trigger="hover focus">
                            <i class="bi bi-book h4"></i>
                          </a>
                      </td>
                      ';
                    }
                    else if($rowSitio['tipo_sitio'] == 2){
                        echo'
                        <td>
                        <a class="pointer" title="Tipo sitio" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Centro de cómputo" data-bs-trigger="hover focus">
                          <i class="bi bi-pc-display-horizontal h4"></i>
                        </a>
                        </td>
                        ';
                    }
                    else if($rowSitio['tipo_sitio'] == 3){
                        echo'
                        <td>
                        <a class="pointer" title="Tipo sitio" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Otro sitio" data-bs-trigger="hover focus">
                          <i class="bi bi-buildings-fill h4"></i>
                        </a>
                        </td>
                        ';
                    }

                    echo'
                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#editar'.$rowSitio['id'].'"><i class="bi bi-pencil-square"></i></a> | <a href="#" data-bs-toggle="modal" data-bs-target="#eliminar'.$rowSitio['id'].'"><i class="bi bi-trash-fill"></i></a></td>
                   ';

                    echo'
                    <td>';
                    if($rowSitio['activo'] == 1){
                        echo'
                        <a onclick="cambioEstatus('.$rowSitio['id'].',0)" id="rem'.$rowSitio['id'].'" class="pointer">
                            <h5><i id="cambioEst'.$rowSitio['id'].'" class="bi bi-arrow-up-circle-fill text-success"></i></h5>
                        </a>
                        ';
                    }
                    else if($rowSitio['activo'] == 0){
                        echo'
                        <a onclick="cambioEstatus('.$rowSitio['id'].',1)" id="rem'.$rowSitio['id'].'" class="pointer">
                            <h5><i id="cambioEst'.$rowSitio['id'].'" class="bi bi-arrow-down-circle-fill text-danger"></i></h5>
                        </a>
                        ';
                    }
                    
                    echo 
                    '</td>
                </tr>
                ';

                echo'
                <!-- Modal editar-->
                <div class="modal fade bg-info" id="editar'.$rowSitio['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Editar sitio</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="prcd/proceso_editar_sitio.php" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-buildings-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Nombre del sitio" aria-label="Nombre del sitio" aria-describedby="basic-addon1" name="sitio" value="'.$rowSitio['sitio'].'" required>
                                <input value="'.$rowSitio['id'].'" name="id" hidden>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
                ';
                echo'
                <!-- Modal eliminar-->
                <div class="modal fade bg-danger" id="eliminar'.$rowSitio['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-trash-fill"></i> Eliminar</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <span class="text-center"><strong>¿Deseas eliminar el sitio '.$rowSitio['sitio'].'?</strong></span>"
                            <form action="prcd/proceso_eliminar_sitio.php" method="POST">
                            <input name="id" value="'.$rowSitio['id'].'" hidden>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Eliminar</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function cambioEstatus(id,est){
        var idEst = id;
        var estatus = est;

        if(estatus == 0){
            document.getElementById('cambioEst'+idEst).setAttribute("class", "bi bi-arrow-down-circle-fill text-danger");
            document.getElementById('rem'+idEst).setAttribute("onclick", "cambioEstatus("+idEst+",1)");
        }
        else if(estatus == 1){
            document.getElementById('cambioEst'+idEst).setAttribute("class", "bi bi-arrow-up-circle-fill text-success");
            document.getElementById('rem'+idEst).setAttribute("onclick", "cambioEstatus("+idEst+",0)");
        }
        
        $.ajax({    
            type:"POST",
            url:"prcd/proceso_editar_estatus_sitio.php",
            data:{
                idEst:idEst,
                estatus:estatus
            },
            dataType: "html",
            async:false,
            cache: false,
            success: function(response)
            {
           
            // alert("Estatus actualizado")
            
            }           
        });
    }
</script>
<script>
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
</script>

