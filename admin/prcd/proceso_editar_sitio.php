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

$id = $_POST['id'];
$sitio = $_POST['sitio'];
$activo = 1;

$querySitio = "UPDATE sitio SET sitio = '$sitio' WHERE id = '$id'";
$resultadoSitio = $conn->query($querySitio);

if($resultadoSitio){

    echo "<script type=\"text/javascript\">
    Swal.fire({
        icon: 'success',
        imageUrl: '../../assets/brand/img/somos_fca_halcon_azul_15.png',
        imageHeight: 200,
        imageAlt: 'UACYA UAZ',
        title: 'Sitio actualizado',
        text: 'Se actualizó el sitio',
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