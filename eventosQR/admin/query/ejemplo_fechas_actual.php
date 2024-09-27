<?php
include('qconn/qc.php');

date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');
$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
    
    //mes y año actual venta Admin
    $sql = "SELECT * FROM venta_gral WHERE YEAR(fecha_venta) = YEAR(CURRENT_DATE()) 
    AND MONTH(fecha_venta) = MONTH(CURRENT_DATE()) ORDER BY id DESC";
    $resultado_sql = $conn->query($sql);

    //por fecha
    if(isset($_POST['fecha'])){
        $fechaBusqueda = $_POST['fecha'];
        $annio = substr($fechaBusqueda, 0, 4);
        $mes = substr($fechaBusqueda, 5, 2); 
        $sqlBusqueda = "SELECT * FROM venta_gral WHERE YEAR(fecha_venta) = $annio 
        AND MONTH(fecha_venta)  = $mes ORDER BY id DESC";
        $resultadoBusqueda = $conn->query($sqlBusqueda);
    }
    //por fecha para Excel
    if(isset($_REQUEST['fechaBusqueda'])){
        $fechaBusqueda = $_REQUEST['fechaBusqueda'];
        $annio = substr($fechaBusqueda, 0, 4);
        $mes = substr($fechaBusqueda, 5, 2); 
        $sqlBusqueda = "SELECT * FROM venta_gral WHERE YEAR(fecha_venta) = $annio 
        AND MONTH(fecha_venta)  = $mes ORDER BY id DESC";
        $resultadoBusquedaExcel = $conn->query($sqlBusqueda);
    }


        //mes y año actual venta entregas
        $sql_entrega = "SELECT * FROM venta_gral WHERE YEAR(fecha_venta) = YEAR(CURRENT_DATE()) 
        AND MONTH(fecha_venta)  = MONTH(CURRENT_DATE()) AND apartado = 2 ORDER BY entrega ASC";
        $resultado_sql_entregas = $conn->query($sql_entrega);

        //por fecha venta entregas
        if(isset($_POST['fecha2'])){
            $fechaBusqueda2 = $_POST['fecha2'];
            $annio = substr($fechaBusqueda2, 0, 4);
            $mes = substr($fechaBusqueda2, 5, 2); 
            $sqlBusqueda = "SELECT * FROM venta_gral WHERE YEAR(fecha_venta) = $annio 
            AND MONTH(fecha_venta)  = $mes AND apartado = 2 ORDER BY entrega ASC";
            $resultado_sql_entregas = $conn->query($sqlBusqueda);
        }
?>