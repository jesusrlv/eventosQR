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
$sqlDelete = "DELETE FROM unidad_academica WHERE id='$id'";
$resultadoEliminar = $conn->query($sqlDelete);

if($resultadoEliminar){

    echo "<script type=\"text/javascript\">
    Swal.fire({
        icon: 'success',
        imageUrl: '../../assets/brand/img/somos_fca_halcon_azul_15.png',
        imageHeight: 200,
        imageAlt: 'UACYA UAZ',
        title: 'Unidad académica eliminado',
        text: 'Se eliminó unidad académica',
        confirmButtonColor: '#3085d6',
        footer: 'UACYA  UAZ'
    }).then(function(){window.location='../lista_catalogos.php';});</script>";
        }
else{
    echo 'No se registró ningún cambio';
}

?>

</body>
</html>