<?php
include('../prcd/qc.php');

$evento = $_POST['evento'];

$queryEventos = "SELECT * FROM registro WHERE evento = '$evento'";
$resultadoEvento = $conn->query($queryEventos);
$numRows = $resultadoEvento->num_rows;
if($numRows >= 1){
$x = 0;
    while($rowEventos = $resultadoEvento->fetch_assoc()){
        $x++;
        $idChecar = $rowEventos['idQr'];
        
        $checar ="SELECT * FROM asistentes WHERE idQr = '$idChecar'";
        $resultadoC = $conn ->query($checar);
        $rowC = $resultadoC->fetch_assoc();
        echo'
        <tr class="text-center">
            <td><small>'.$x.'</small></td>
            <td><small>'.$rowC['nombre'].'</small></td>
            <td><small>'.$rowC['telefono'].'</small></td>';
          
            echo'
            <td><small>'.$rowC['email'].'</small></td>';
            
            echo'
            <td><small>'.$rowC['no_mesa'].'</small></td>
            <td><small>'.$rowEventos['fecha_registro'].'</small></td>';

    }
}
else{
    echo'
    <script>
        alert("No hay personas registradas a este evento");
    </script>

    ';
}

?>