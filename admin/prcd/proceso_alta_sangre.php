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

$tipo_sangre = $_POST['sangre'];

$query = "INSERT INTO sangre(tipo_sangre) VALUES('$tipo_sangre')";
$resultado = $conn->query($query);

if($resultado){


    echo "<script type=\"text/javascript\">
    Swal.fire({
        icon: 'success',
        imageUrl: '../../assets/brand/img/somos_fca_halcon_azul_15.png',
        imageHeight: 200,
        imageAlt: 'UACYA UAZ',
        title: 'Tipo de sangre agregado',
        text: 'Se dio de alta tipo de sangre',
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