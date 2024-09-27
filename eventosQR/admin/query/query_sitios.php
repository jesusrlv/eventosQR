<?php
include('prcd/qc.php');

// query sitios
if (isset($idEventos)){
$sqlSitios2 = "SELECT * FROM sitio WHERE id = '$idEventos' ORDER BY id ASC ";
$resultadoSitio2 = $conn->query($sqlSitios2);
}
else{
// sitios
$sqlSitios = "SELECT * FROM sitio ORDER BY id ASC";
$resultadoSitio = $conn->query($sqlSitios);
}
?>