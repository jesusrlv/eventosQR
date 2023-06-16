<?php
include('qc.php');

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mesa = $_POST['mesa'];
$internacional = $_POST['internacional'];

$telefono = $internacional.''.$telefono;

function generarCodigo($longitud) {
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
    }
    //genera un código de 9 caracteres de longitud.
    $codigo = generarCodigo(9);

    $idQr = $telefono.'_'.$codigo;


$queryAsistentes = "INSERT INTO asistentes(
    nombre,
    telefono,
    email,
    no_mesa,
    idQr
    ) VALUES(
        '$nombre',
        '$telefono',
        '$email',
        '$mesa',
        '$idQr')";

$resultadoAsistentes = $conn->query($queryAsistentes);

if($resultadoAsistentes){

echo json_encode(array('success' => 1));
        }
else{
    $error = $conn->error;
    echo 'No se registró ningún cambio<br>'.$error;
    echo json_encode(array('success' => 0,'error' => $error));

}

?>