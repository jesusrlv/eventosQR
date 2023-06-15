<?php
include('../prcd/qc.php');
if(empty($_POST['busqueda']) || ($_POST['busqueda'] == null)){
    echo'
        <tr>
            <td colspan="9" class="text-center table-danger">Sin datos</td>
        </tr>
        ';

}
else if(isset($_POST['busqueda'])){
$variable = $_POST['busqueda'];
$var = "SELECT * FROM asistentes WHERE nombre LIKE '%$variable%' OR apellidos LIKE '%$variable%' OR apellido_m LIKE '%$variable%' OR curp LIKE '%$variable%' OR numero_control LIKE '%$variable%' ";
$resultadoVariable = $conn->query($var);
$filaVar = $resultadoVariable->num_rows;
    if($filaVar > 0){
    $x=0;
        while($rowVar = $resultadoVariable->fetch_assoc()){
            $x++;
            $concatenado = $rowVar['idQr'];
            echo'
            <tr>
                <td>'.$x.'</td>
                <td>'.$rowVar['numero_control'].'</td>
                <td>'.$rowVar['apellidos'].'</td>
                <td>'.$rowVar['apellido_m'].'</td>
                <td>'.$rowVar['nombre'].'</td>
                <td>'.$rowVar['carrera'].'</td>
                <td>'.$rowVar['curp'].'</td>
                <td>';
                ?>

                <a href="#" style="text-decoration:none" data-bs-toggle="modal" data-bs-target="#editarModal" onclick="ModalEditar('<?php echo $concatenado ?>')"><i class="bi bi-pencil-square"></i></a>

                <?php
                echo'
                </td>
                <td>';
                ?>

                <a href="#" style="text-decoration:none" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="ModalQr('<?php echo $concatenado ?>')"><i class="bi bi-qr-code-scan h3"></i></a>

                <?php
                echo'
                </td>
            </tr>

        ';

        }
    }
    else{
        echo'
        <tr>
            <td colspan="9" class="text-center table-danger">Sin datos</td>
        </tr>
        ';
    }
}
?>