<?php
    include('qc.php');

    if (isset($_POST['evento']) && isset($_POST['c'])) {

        date_default_timezone_set('America/Mexico_City');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

        $evento = $_POST['evento'];
        $cadena = $_POST['c'];

        $sqlValidacion = "SELECT * FROM asistentes WHERE idQr = '$cadena'";
        $resultadoSqlValidacion = $conn->query($sqlValidacion);
        $numRowsV = $resultadoSqlValidacion->num_rows;

        if($numRowsV == 0){
            echo json_encode(array('success' => 3));
        }
        else{

            $sql = "SELECT * FROM registro_sitios WHERE idQr = '$cadena' AND sitio = '$evento'";
            $resultadoSql = $conn->query($sql);
            $numRows = $resultadoSql->num_rows;

            if($numRows == 1){
                $sqlUpdate ="UPDATE registro_sitios SET fecha_salida = '$fecha_sistema' WHERE idQr = '$cadena' AND sitio = '$evento'";
                $resultadoSqlUpdate = $conn->query($sqlUpdate);

                echo json_encode(array('success' => 2));
            }
            else{
                $sqlQuery ="SELECT * FROM asistentes WHERE idQr = '$cadena'";
                $resultadoSqlQuery = $conn->query($sqlQuery);
                $rowsqlQuery = $resultadoSqlQuery->fetch_assoc();

                $qr = $rowsqlQuery['idQr'];
                $id = $rowsqlQuery['id'];
                $flag = 1;

                $sqlInsert = "INSERT INTO registro_sitios (asistente,sitio, asistencia, fecha_registro, idQr) VALUES ('$id','$evento','$flag','$fecha_sistema','$qr')";
                $resultadoSqlInsert = $conn->query($sqlInsert);

                if($resultadoSqlInsert){
                    echo json_encode(array('success' => 1));
                }
        }
    } // fin else valicacion

    }
    else{
        echo json_encode(array('success' => 3));
    }

?>