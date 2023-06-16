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
$var = "SELECT * FROM asistentes WHERE nombre LIKE '%$variable%' OR telefono LIKE '%$variable%' OR email LIKE '%$variable%' OR no_mesa LIKE '%$variable%'";
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
                <td>'.$rowVar['nombre'].'</td>
                <td>'.$rowVar['telefono'].'</td>
                <td>'.$rowVar['email'].'</td>
                <td>'.$rowVar['no_mesa'].'</td>
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
                <td>';
                ?>

                <a href="" class="btn btn bg-primary"><i class="bi bi-envelope text-light"></i></a>

                <?php
                echo'
                </td>
                <td>';
                ?>

                <a href="https://web.whatsapp.com/send/?phone=<?php echo $rowVar['telefono'] ?>" target="_blank" class="btn btn bg-success"><i class="bi bi-whatsapp text-light"></i></a>

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