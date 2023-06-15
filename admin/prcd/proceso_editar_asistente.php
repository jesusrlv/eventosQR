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

$matriculaE = $_POST['matriculaE'];
$apellido_pE = $_POST['apellido_pE'];
$apellido_mE = $_POST['apellido_mE'];
$nombreE = $_POST['nombreE'];
$carreraE = $_POST['carreraE'];
$curpE = $_POST['curpE'];
$concatenadoE = $_POST['concatenadoE'];

$query = "UPDATE asistentes SET numero_control = '$matriculaE', apellidos = '$apellido_pE', apellido_m = '$apellido_mE', nombre = '$nombreE', carrera = '$carreraE', curp = '$curpE' WHERE idQr = '$concatenadoE'";
$resultado = $conn->query($query);

if($resultado){

    echo "<script type=\"text/javascript\">
    Swal.fire({
        icon: 'success',
        imageUrl: '../../assets/brand/img/somos_fca_halcon_azul_15.png',
        imageHeight: 200,
        imageAlt: 'UACYA UAZ',
        title: 'Asistente actualizado',
        text: 'Se actualizó el catálogo',
        confirmButtonColor: '#3085d6',
        footer: 'UACYA  UAZ'
    }).then(function(){window.location='../alta_asistentes.php';});</script>";
        }
else{
    echo 'No se registró ningún cambio';
}

?>

</body>
</html>