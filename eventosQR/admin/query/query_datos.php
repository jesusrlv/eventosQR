<?php
    include('../prcd/qc.php');

    $id = $_POST['id'];

    $sql = "SELECT * FROM asistentes WHERE idQr = '$id'";
    $resultadoSql = $conn->query($sql);
    $rowSql = $resultadoSql->fetch_assoc();

    $nombre = $rowSql['nombre'];
    $telefono = $rowSql['telefono'];
    $email = $rowSql['email'];
    $mesa = $rowSql['mesa'];
    $concatenado = $rowSql['idQr'];

    if($resultadoSql){
    echo json_encode(
        array(
            'estatus'=>1,
            'nombre'=>$nombre,
            'telefono'=>$telefono,
            'email'=>$email,
            'mesa'=>$mesa,
            'concatenado'=>$concatenado
        ));
    }
    else{
        $error = $conn->error;
        echo json_encode(
            array(
                'estatus'=>0,
                'error'=>$error
            ));
    }

?>