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

$sitio = $_POST['sitio'];
$tipo_sitio = $_POST['tipo_sitio'];
$activo = 1;

$querySitio = "INSERT INTO sitio(sitio,tipo_sitio,activo) VALUES('$sitio','$tipo_sitio','$activo')";
$resultadoSitio = $conn->query($querySitio);

if($resultadoSitio){


    echo "<script type=\"text/javascript\">
    Swal.fire({
        icon: 'success',
        imageUrl: '../../assets/brand/img/somos_fca_halcon_azul_15.png',
        imageHeight: 200,
        imageAlt: 'UACYA UAZ',
        title: 'Sitio agregado',
        text: 'Se dio de alta el sitio',
        confirmButtonColor: '#3085d6',
        footer: 'UACYA  UAZ'
    }).then(function(){window.location='../alta_sitio.php';});</script>";
        }
else{
    echo 'No se registró ningún cambio';
}

?>

</body>
</html>