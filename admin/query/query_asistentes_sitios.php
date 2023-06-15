<?php
include('../prcd/qc.php');

$sitio = $_POST['sitio'];
$fecha_inicio = $_POST['DateInicial'];
$fecha_final = $_POST['DateFinal'];

$querysitio = "SELECT asistentes.id AS id, asistentes.apellidos AS apellidos, asistentes.nombre AS nombre, asistentes.tipo_sangre as tipo_sangre, asistentes.semestre AS semestre, asistentes.grupo AS grupo, asistentes.unidad_academica AS unidad_academica, asistentes.numero_control AS numero_control, asistentes.carrera AS carrera, registro_sitios.asistente AS asistente, registro_sitios.sitio AS sitio, registro_sitios.asistencia AS asistencia, registro_sitios.fecha_registro AS fecha_registro FROM asistentes INNER JOIN registro_sitios ON asistentes.id = registro_sitios.asistente WHERE registro_sitios.sitio = '$sitio' AND registro_sitios.fecha_registro = '$fecha_inicio' AND registro_sitios.fecha_salida = '$fecha_final'";
$resultadositio = $conn->query($querysitio);
$numRows = $resultadositio->num_rows;
if($numRows >= 1){
$x = 0;
    while($rowsitio = $resultadositio->fetch_assoc()){
        $x++;
        echo'
        <tr class="text-center">
            <td><small>'.$x.'</small></td>
            <td><small>'.$rowsitio['apellidos'].'</small></td>
            <td><small>'.$rowsitio['nombre'].'</small></td>';
          
            echo'
            <td><small>'.$rowsitio['tipo_sangre'].'</small></td>';

            $semestre = $rowsitio['semestre'];
            
            echo'
            <td><small>'.$rowsitio['semestre'].'</small></td>';

            echo'<td><small>'.$rowsitio['grupo'].'</small></td>';

           
            echo'
            <td><small>'.$rowsitio['unidad_academica'].'</small></td>';

            echo'<td><small>'.$rowsitio['numero_control'].'</small></td>';

            
            echo'
            <td><small>'.$rowsitio['carrera'].'</small></td>'
            ;
            echo'
            <td><small>'.$rowsitio['fecha_registro'].'</small></td>
            <td><small>'.$rowsitio['fecha_salida'].'</small></td>
            '
            ;

            echo'
            
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