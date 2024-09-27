<?php

    include('../prcd/qc.php');

    date_default_timezone_set('America/Mexico_City');
    setlocale(LC_TIME, 'es_MX.UTF-8');
    $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

    $sitio = $_POST['sitio'];

    $annio = substr($fecha_sistema, 0, 4);
    $mes = substr($fecha_sistema, 5, 2);
    $concaDate = $annio.''.$mes;
    
    
    // $dia = substr($fecha_sistema, 6);

    // por año
    $annio1 = "SELECT * FROM registro_sitios WHERE YEAR(fecha_registro) = '$annio' AND sitio = '$sitio'";
    $resultadoAnnio = $conn->query($annio1);
    $rowsAnnio = $resultadoAnnio->num_rows;

    // por mes
    $mesSql = "SELECT * FROM registro_sitios WHERE YEAR(fecha_registro) = '$annio' AND MONTH(fecha_registro) = '$mes' AND sitio = '$sitio'";
    // $mesSql = "SELECT * FROM registro_sitios WHERE YEAR(fecha_registro) = $annio 
    //     AND MONTH(fecha_venta)  = $mes AND vendedor = '$idReporte' ORDER BY id DESC";

    $resultadoMes = $conn->query($mesSql);

    $rowsMes = $resultadoMes->num_rows;

    // por día
    $diaSql = "SELECT * FROM registro_sitios WHERE fecha_registro = '$fecha_sistema' AND sitio = '$sitio'";
    $resultadodia = $conn->query($diaSql);
    $rowsdia = $resultadodia->num_rows;
    
        echo json_encode(
            array(
            'estatus'=>1,
            'dia'=>$rowsdia,
            'mes'=>$rowsMes,
            'annio'=>$rowsAnnio
        ));
    

?>