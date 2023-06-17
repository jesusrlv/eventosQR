<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Alta asistentes</title>
    <link rel="icon" type="image/png" href="../assets/brand/img/SmartEventICOLight.ico"/>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600&display=swap" rel="stylesheet">
    <!-- font -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" src="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="lista_asistentes.js"></script>
    <script src="script.js"></script>
    <script src="guardar_individual.js"></script>

    <script src="prcd/QR/ajax_generate_code.js"></script>

    <style>
      #qrcode img{
        margin:auto;
      }
      .accordion-button:not(.collapsed) {
          /* color: white; */
          background-color:#f3d6cb;
      }
      .accordion-button {
          /* color: aliceblue; */
          background-color: #f3d6cb;
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
  <header class="p-3" style="background-color:#8a608a">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="../assets/brand/img/SmartEventLogoLight.png" width="auto" height="70" role="img" alt="">        
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 ms-4 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-light"><i class="bi bi-houses"></i> Inicio</a></li>
          <!-- <li><a href="alta_eventos.php" class="nav-link px-2 text-light"><i class="bi bi-plus-circle" hidden></i> Agregar evento</a></li> -->
          <li><a href="#" class="nav-link px-2 text-light"><i class="bi bi-plus-circle"></i> Pre-registro</a></li>
          <!-- <li><a href="lista_eventos.php" class="nav-link px-2 text-light"><i class="bi bi-list-check" hidden></i> Lista eventos</a></li> -->
          <li><a href="lista_asistentes.php" class="nav-link px-2 text-light"><i class="bi bi-list-check"></i> Lista asistentes</a></li>
        </ul>

        <div class="text-end">
          <!-- <button type="button" class="btn btn-outline-light me-2">Login</button> -->
          <a href="query/sort.php" type="button " class="btn btn-light">Salir</a>
        </div>
      </div>
    </div>
  </header>
  <div class="b-example-divider">
  </div>
  <div class="container text-center mt-2">
  <img src="../assets/brand/img/SmartEventLogo.png" width="170" height="" role="img" alt="" class="p-2">
  </div>
  <div class="container-fluid  w-75 h-100 mb-5 p-3">
  
    <h3 class="mb-3 text-secondary "><i class="bi bi-people-fill"></i> Pre-carga de asistentes</h3>

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
<form id="formAlta">

<div class="row">
  
    <div class="col-6">
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-plus-fill"></i></span>
          <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" name="nombre" id="nombreAlta" required>
      </div>
    </div>
    <div class="col-6">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-globe-americas"></i></span>
        <select class="form-select" id="internacional" aria-label="Default select example">
          <option value="52">Mex</option>
          <option value="">Otro</option>
        </select>
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
        <input type="text" class="form-control" style="width: 50%;" placeholder="Teléfono" aria-label="Teléfono" aria-describedby="basic-addon1" name="Teléfono" id="telefonoAlta" required >
      </div>
    </div>
    <div class="col-6">
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
          <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" name="email" id="emailAlta" required>
      </div>
    </div>
    <div class="col-2">
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-map"></i></span>
          <input type="text" class="form-control" placeholder="Mesa" aria-label="Mesa" aria-describedby="basic-addon1" name="Mesa" id="mesaAlta" required>
      </div>
    </div>
    <div class="col-2">
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill-exclamation"></i></span>
          <input type="text" class="form-control" placeholder="PAX por mesa" aria-label="" aria-describedby="basic-addon1" name="invitadosMesa" id="paxMesa">
      </div>
    </div>
    <div class="col-2">
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-lines-fill"></i></span>
          <select class="form-select" id="tipoInvitado" aria-label="Default select example">
          <option selected>Tipo de invitado...</option>
          <option value="1">Principal</option>
          <option value="2">Acompañante</option>
        </select>
      </div>
    </div>
          <hr>

          <p class="w-100 text-end"> 
              <button class="btn text-white" style="background-color: rgba(90, 46, 116, 0.9);" type="button"  id="botonRegistro"><i class="bi bi-person-plus-fill"></i> Registrar</button>
              <!-- <button class="btn btn-primary" type="button" id="botonRegistro"><i class="bi bi-person-plus-fill"></i> Registrar</button> -->
            </p>
      </form>
            
  
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
          <button class="btn text-white" style="background-color: rgba(90, 46, 116, 0.9);" type="submit"><i class="bi bi-file-earmark-arrow-up"></i> Cargar archivo</button>
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
              <th scope="col"><small>#</small></th>
              <th scope="col"><small>Nombre</small></th>
              <th scope="col"><small>Teléfono</small></th>
              <th scope="col"><small>Email</small></th>
              <th scope="col"><small>Mesa</small></th>
              <th scope="col"><small>Editar</small></th>
              <th scope="col"><small>QR</small></th>
              <th scope="col"><small><i class="bi bi-envelope text-primary"></i> Email</small></th>
              <th scope="col"><small><i class="bi bi-whatsapp text-success"></i> WhatsApp</small></th>
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
      <img src="../assets/brand/img/SmartEventLogoLight.png" width="auto" height="80" role="img" alt="" class="p-2 rounded" style="background-color:#b0b8b4;">
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
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" id="nombreE" name="nombreE" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-phone"></i></span>
                <input type="text" class="form-control" placeholder="Teléfono" aria-label="Teléfono" aria-describedby="basic-addon1" id="telefonoE" name="telefonoE" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" id="emailE" name="emailE" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-diagram-2"></i></span>
                <input type="text" class="form-control" placeholder="Mesa" aria-label="Mesa" aria-describedby="basic-addon1" id="mesaE" name="mesaE" required>
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
            if(jsonData.estatus = 1){
              var nombre = jsonData.nombre;
              var telefono = jsonData.telefono;
              var email = jsonData.email;
              var mesa = jsonData.mesa;
              var concatenado = jsonData.concatenado;

              document.getElementById("nombreE").value = nombre;
              document.getElementById("telefonoE").value = telefono;
              document.getElementById("emailE").value = email;
              document.getElementById("mesaE").value = mesa;
              document.getElementById("concatenadoE").value = concatenado;

            }
            else if(jsonData.estatus = 0){
              console.log(jsonData.error)
            }

          }               
        });
  }
</script>

<!-- https://www.geeksforgeeks.org/how-to-make-a-qr-code-generator-using-qrcode-js/ -->

