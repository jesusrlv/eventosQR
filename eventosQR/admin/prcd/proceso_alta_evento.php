<html>
<meta charset="utf-8">
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400&display=swap');
    body{
        font-family: 'Montserrat', sans-serif;
    }
</style>

<?php
include('qc.php');

$fecha_evento = $_POST['fecha_evento'];
$nombre_evento = $_POST['nombre_evento'];
$lugar_evento = $_POST['lugar_evento'];
$capacidad = $_POST['capacidad'];
$activo = 1;

$queryEvento = "INSERT INTO eventos(fecha,nombre,lugar,capacidad,activo) VALUES('$fecha_evento','$nombre_evento','$lugar_evento','$capacidad','$activo')";
$resultadoEvento = $conn->query($queryEvento);

if($resultadoEvento){


    echo "<script type=\"text/javascript\">
    Swal.fire({
        icon: 'success',
        imageUrl: '../../assets/brand/img/somos_fca_halcon_azul_15.png',
        imageHeight: 200,
        imageAlt: 'UACYA UAZ',
        title: 'Evento agregado',
        text: 'Se dio de alta el evento para generar QRs',
        confirmButtonColor: '#3085d6',
        footer: 'UACYA  UAZ'
    }).then(function(){window.location='../lista_eventos.php';});</script>";
        }
else{
    echo 'No se registró ningún cambio';
}

?>

</body>
</html>