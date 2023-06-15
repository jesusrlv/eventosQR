<?php
include('../prcd/qc.php');

$evento = $_POST['evento'];

$queryEventos = "SELECT asistentes.id AS id, asistentes.apellidos AS apellidos, asistentes.nombre AS nombre, asistentes.tipo_sangre as tipo_sangre, asistentes.semestre AS semestre, asistentes.grupo AS grupo, asistentes.unidad_academica AS unidad_academica, asistentes.numero_control AS numero_control, asistentes.carrera AS carrera, registro.asistente AS asistente, registro.evento AS evento, registro.asistencia AS asistencia, registro.fecha_registro AS fecha_registro FROM asistentes INNER JOIN registro ON asistentes.id = registro.asistente WHERE registro.evento = '$evento'";
$resultadoEvento = $conn->query($queryEventos);
$numRows = $resultadoEvento->num_rows;
if($numRows >= 1){
$x = 0;
    while($rowEventos = $resultadoEvento->fetch_assoc()){
        $x++;
        echo'
        <tr class="text-center">
            <td><small>'.$x.'</small></td>
            <td><small>'.$rowEventos['apellidos'].'</small></td>
            <td><small>'.$rowEventos['nombre'].'</small></td>';
          
            echo'
            <td><small>'.$rowEventos['tipo_sangre'].'</small></td>';

            $semestre = $rowEventos['semestre'];
            
            echo'
            <td><small>'.$rowEventos['semestre'].'</small></td>';

            echo'<td><small>'.$rowEventos['grupo'].'</small></td>';

           
            echo'
            <td><small>'.$rowEventos['unidad_academica'].'</small></td>';

            echo'<td><small>'.$rowEventos['numero_control'].'</small></td>';

            
            echo'
            <td><small>'.$rowEventos['carrera'].'</small></td>'
            ;
            echo'
            <td><small>'.$rowEventos['fecha_registro'].'</small></td>'
            ;

            echo'
            
            <td><a href="constanciaPDF.php?id='.$rowEventos['id'].'&nombre='.$rowEventos['nombre'].'&apellidos='.$rowEventos['apellidos'].'&idevento='.$rowEventos['evento'].'" target="_blank"><i class="bi bi-filetype-pdf"></i></a></td>
        </tr>
        ';
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