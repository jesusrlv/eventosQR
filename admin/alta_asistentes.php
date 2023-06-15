<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Alta asistentes</title>
    <link rel="icon" type="image/png" href="../assets/brand/img/ico.ico"/>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600&display=swap" rel="stylesheet">
    <!-- font -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" src="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="lista_asistentes.js"></script>
    <script src="script.js"></script>

    <script src="prcd/QR/ajax_generate_code.js"></script>

    <style>
      #qrcode img{
        margin:auto;
      }
      .accordion-button:not(.collapsed) {
          color: white;
          background-color: #000e42;
      }
      .accordion-button {
          color: aliceblue;
          background-color: #000e42;
      }
      .accordion-button::after {
          color: aliceblue;
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
    </style>

    <?php
      include ('query/query_catalogos.php');  
    ?>

    
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
          <li><a href="#" class="nav-link px-2 text-secondary"><i class="bi bi-plus-circle-fill"></i> Pre-registro</a></li>
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

  <div class="container-fluid w-75 h-100 mt-1 mb-5 p-5">

    <h3 class="mt-4 mb-3 text-secondary"><i class="bi bi-people-fill"></i> Pre-carga de asistentes</h3>

      <!-- accordion -->
    <div class="accordion" id="accordionExample">
   <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <i class="bi bi-clipboard-plus-fill me-1"></i> Agregar asistente
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<form action="prcd/proceso_alta_asistentes.php" method="POST">

<div class="row">
  <div class="col-12 mb-3">
    <p class="h5">Tipo de asistente</p>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="tipo_asistente" id="radio1" value="1" onchange="valorTipoAsistente()">
      <label class="form-check-label" for="flexRadioDefault1">
        Alumno UAZ
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="tipo_asistente" id="radio2" value="2" onchange="valorTipoAsistente()">
      <label class="form-check-label" for="flexRadioDefault2">
        Docente UAZ
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="tipo_asistente" id="radio3" value="3" onchange="valorTipoAsistente()">
      <label class="form-check-label" for="flexRadioDefault2">
        Trabajador UAZ
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="tipo_asistente" id="radio4" value="4" onchange="valorTipoAsistente()">
      <label class="form-check-label" for="flexRadioDefault2">
        Externo
      </label>
    </div>
  </div>

    <div class="col-6">
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-plus-fill"></i></span>
          <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" name="nombre" id="nombre" required disabled>
      </div>
    </div>

    <div class="col-3">
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-people-fill"></i></span>
          <input type="text" class="form-control" placeholder="Apellidos paterno" aria-label="Apellidos" aria-describedby="basic-addon1" name="apellidos" id="apellidos" required disabled>
      </div>
    </div>
    <div class="col-3">
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-people-fill"></i></span>
          <input type="text" class="form-control" placeholder="Apellidos materno" aria-label="Apellidos" aria-describedby="basic-addon1" name="apellido_m" id="apellido_m" required disabled>
      </div>
    </div>

    <div class="col-6">
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-people-fill"></i></span>
          <input type="text" class="form-control" placeholder="CURP" aria-label="CURP" aria-describedby="basic-addon1" name="curp" id="curp" onkeyup="javascript:this.value=this.value.toUpperCase();" onblur="validarInput(this);" required disabled>
      </div>
      <div style="margin-top:-12px" class="form-text" id="CURPvalida" hidden>CURP válida.</div>
      <div style="margin-top:-12px" class="form-text text-danger" id="CURPNovalida" hidden>CURP no válida.</div>
    </div>
  
  <div class="col-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-bandaid-fill"></i></span>
        <select class="form-select" aria-label="Default select example" name="tipo_sangre" id="tipo_sangre" required disabled>
            <option value="" selected>Tipo de sangre</option>
            <?php
            while ($rowSangre = $resultadosqlSangre->fetch_assoc()){
              echo'
                <option value="'.$rowSangre['id'].'">'.$rowSangre['tipo_sangre'].'</option>
              ';
            }
            ?>
        </select>
    </div>
  </div>


  <div class="col-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-list-ol"></i></span>
        <select class="form-select" aria-label="Default select example" name="semestre" id="semestre" required disabled>
            <option value="" selected>Semestre</option>
            <?php
            while ($rowSemestre = $resultadosqlSemestre->fetch_assoc()){
              echo'
                <option value="'.$rowSemestre['id'].'">'.$rowSemestre['semestre'].'</option>
              ';
            }
            ?>
        </select>
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-people-fill"></i></span>
        <input type="text" class="form-control" placeholder="Grupo" aria-label="Grupo" aria-describedby="basic-addon1" name="grupo" id="grupo" required disabled>
    </div>
  </div>

  <div class="col-6">
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1"><i class="bi bi-list-ul"></i></span>
      <select class="form-select" aria-label="Default select example" name="unidad_academica" id="unidad_academica" required disabled>
          <option value="" selected>Unidad Académica</option>
          <option value="0">Sin Unidad Académica</option>
          <?php
          while ($rowUAcademica = $resultadoUAcademica->fetch_assoc()){
            echo'
              <option value="'.$rowUAcademica['id'].'">'.$rowUAcademica['unidad_academica'].'</option>
            ';
          }
          ?>
      </select>
    </div>
  </div>

  <div class="col-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-123"></i></span>
        <input type="text" class="form-control" placeholder="Número de matrícula" aria-label="Número de matrícula" aria-describedby="basic-addon1" name="num_control" id="num_control" required disabled>
    </div>
  </div>

  <div class="col-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-list-ul"></i></span>
        <select class="form-select" aria-label="Default select example" name="carrera" id="carrera" required disabled>
            <option value="" selected>Programa</option>
            <?php
            while ($rowPrograma = $resultadoPrograma->fetch_assoc()){
              echo'
                <option value="'.$rowPrograma['id'].'">'.$rowPrograma['programa'].'</option>
              ';
            }
            ?>
        </select>
    </div>
  </div>

  <?php
                  // include('query/query_eventos.php');
                  
                  // while($rowEvento = $resultadoEvento->fetch_assoc()){
                  //   echo'
                  //   <option value="'.$rowEvento['id'].'">'.$rowEvento['nombre'].'</option>
                  //   ';
                  // }
                  ?>
 </div><!-- row -->
          <hr>


          <p class="w-100 text-end"> 
              <button class="btn btn-primary" type="submit" id="botonRegistro" disabled><i class="bi bi-person-plus-fill"></i> Registrar</button>
            </p>
        <!-- </div> -->
      </form>
            <!-- <div class="col-0"></div> -->
        <!-- </div>
    </div> -->
  
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <i class="bi bi-file-earmark-spreadsheet-fill me-1"></i></i> Carga de archivo masivo
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <form action="query/query_csv.php" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input class="form-control" type="file" id="formFile" name="csv">
          <button class="btn btn-primary" type="submit"><i class="bi bi-file-earmark-arrow-up-fill"></i> Cargar archivo</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <i class="bi bi-search me-1"></i> Buscar asistente
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
          <input type="text" class="form-control" placeholder="Escribe los datos del asistente" aria-label="Username" aria-describedby="basic-addon1" id="busquedaAdmin1" oninput="busquedaAdmin()">
        </div>
        <table class="table">
          <thead>
            <tr class="text-center">
              <th scope="col">#</th>
              <th scope="col">Matrícula</th>
              <th scope="col">Apellido Paterno</th>
              <th scope="col">Apellido Materno</th>
              <th scope="col">Nombre</th>
              <th scope="col">Carrera</th>
              <th scope="col">CURP</th>
              <th scope="col">Acción</th>
              <th scope="col">QR</th>
            </tr>
          </thead>
          <tbody id="txtHint" class="text-center">
            
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>
    <!-- accordion -->

  <!-- <div class="b-example-divider"> -->
  </div>

</main>
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-12 mb-0 text-muted"><a href="/" class="col-md-4 d-flex mb-md-0 me-md-auto link-dark text-decoration-none">
                <img src="../assets/brand/img/logo.png" width="140" height="45" role="img" alt="" class="p-2 rounded" style="background-color:#000e42">
            </a></p>
      
    </footer>
  </div>

    <!-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> -->

  </body>
</html>

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Qr seleccionado</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <strong>Matrícula:</strong> <span id="matriculaQR2"></span>
                <hr>
                <strong>QR</strong>
                <div class="justify-content-center" id="qrcode"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
 <!-- Modal editar -->
 <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-pencil-square"></i> Editar datos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="prcd/proceso_editar_asistente.php" method="POST">
            <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-123"></i></span>
                <input type="text" class="form-control" placeholder="Matrícula" aria-label="Username" aria-describedby="basic-addon1" id="matriculaE" name="matriculaE" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-people-fill"></i></span>
                <input type="text" class="form-control" placeholder="Apellido paterno" aria-label="Username" aria-describedby="basic-addon1" id="apellido_pE" name="apellido_pE" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-people-fill"></i></span>
                <input type="text" class="form-control" placeholder="Apellido materno" aria-label="Username" aria-describedby="basic-addon1" id="apellido_mE" name="apellido_mE" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" id="nombreE" name="nombreE" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-bounding-box"></i></span>
                <input type="text" class="form-control" placeholder="Carrera" aria-label="Username" aria-describedby="basic-addon1" id="carreraE" name="carreraE" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-spellcheck"></i></span>
                <input type="text" class="form-control" placeholder="CURP" aria-label="Username" aria-describedby="basic-addon1" id="curpE" name="curpE" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-spellcheck"></i></span>
                <input type="text" class="form-control" placeholder="concatenado" aria-label="Username" aria-describedby="basic-addon1" id="concatenadoE" name="concatenadoE" >
              </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Editar</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script>
  function ModalQr(concatenado){
    var texto = concatenado.toString();
    document.getElementById('matriculaQR2').innerHTML = concatenado;
    document.getElementById('qrcode').innerHTML = "";
// aquí

var qrcode = new QRCode(document.getElementById("qrcode"), {
      text: texto,
      width: 300,
      height: 300,
      correctLevel: QRCode.CorrectLevel.H
    });

    // Obtener el elemento canvas generado por QRCode.js
    var canvas = document.querySelector("#codigo-qr canvas");

    // Crear un nuevo elemento de imagen para el logo
    var logo = new Image();
    logo.src = "imagen.png";

    // Esperar a que el logo se cargue antes de dibujarlo en el canvas
    logo.onload = function() {
      // Calcular la posición del logo en el centro del código QR
      var logoSize = qrcode._htOption.width * 0.2; // Tamaño relativo del logo (20%)
      var xPos = (canvas.width - logoSize) / 2;
      var yPos = (canvas.height - logoSize) / 2;

      // Dibujar el logo en el canvas
      var ctx = canvas.getContext("2d");
      ctx.drawImage(logo, xPos, yPos, logoSize, logoSize);
    };

    console.log();

  }

    
  
</script>

<script>
  function ModalEditar(idQr){
    let id = idQr.toString();
            // document.getElementById("nombreE").value = "";
            // document.getElementById("apellido_pE").value = "";
            // document.getElementById("apellido_mE").value = "";
            // document.getElementById("carreraE").value = "";
            // document.getElementById("curpE").value = "";
            // document.getElementById("matriculaE").value = "";
            // document.getElementById("concatenadoE").value = "";
    // console.log(id);
    $.ajax({
        type:"POST",
        url:"query/query_datos.php",
        data:{
          id:id
        },
        dataType: "json",
          success: function(response) {
            var jsonData = JSON.parse(JSON.stringify(response));
            // var jsonData = JSON.parse(response);
            if(jsonData.estatus == 1){
              var nombre = jsonData.nombre;
              var apellido_paterno = jsonData.apellido_paterno;
              var apellido_materno = jsonData.apellido_materno;
              var carrera = jsonData.carrera;
              var curp = jsonData.curp;
              var matricula = jsonData.matricula;
              var concatenado = jsonData.concatenado;
              // var error = jsonData.error;
              // console.log(nombre);
              // console.log(matricula);

              document.getElementById("nombreE").value = nombre;
              document.getElementById("apellido_pE").value = apellido_paterno;
              document.getElementById("apellido_mE").value = apellido_materno;
              document.getElementById("carreraE").value = carrera;
              document.getElementById("curpE").value = curp;
              document.getElementById("matriculaE").value = matricula;
              document.getElementById("concatenadoE").value = concatenado;

            }
            else if(jsonData.estatus == 0){
              console.log(jsonData.error)
            }

          }               
        });
  }
</script>

<!-- https://www.geeksforgeeks.org/how-to-make-a-qr-code-generator-using-qrcode-js/ -->

