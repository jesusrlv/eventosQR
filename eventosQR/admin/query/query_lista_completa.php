<?php
include('../prcd/qc.php');
$var = "SELECT * FROM asistentes ORDER BY no_mesa";
$resultadoVariable = $conn->query($var);

    $x=0;
    $y=0;
        while($rowVar = $resultadoVariable->fetch_assoc()){
            if($rowVar['pax_mesa'] == 1 || $rowVar['pax_mesa'] == 2 || $rowVar['pax_mesa'] == 3 || $rowVar['pax_mesa'] == 4 || $rowVar['pax_mesa'] == 5 || $rowVar['pax_mesa'] ==6 || $rowVar['pax_mesa'] ==7 || $rowVar['pax_mesa'] ==8 || $rowVar['pax_mesa'] ==9 || $rowVar['pax_mesa'] ==10 || $rowVar['pax_mesa'] ==11 || $rowVar['pax_mesa'] ==12 || $rowVar['pax_mesa'] ==13 || $rowVar['pax_mesa'] ==14 || $rowVar['pax_mesa'] ==15 || $rowVar['pax_mesa'] ==16 || $rowVar['pax_mesa'] ==17 || $rowVar['pax_mesa'] ==18 || $rowVar['pax_mesa'] ==19 || $rowVar['pax_mesa'] ==20 || $rowVar['pax_mesa'] ==21 || $rowVar['pax_mesa'] ==22 || $rowVar['pax_mesa'] ==23 || $rowVar['pax_mesa'] ==24 || $rowVar['pax_mesa'] ==25 || $rowVar['pax_mesa'] ==26 || $rowVar['pax_mesa'] ==27 || $rowVar['pax_mesa'] ==28 || $rowVar['pax_mesa'] ==29 || $rowVar['pax_mesa'] ==30){
            
                
            $x++;
            $concatenado = $rowVar['idQr'];
            echo'
            <tr>
                <td>'.$x.'</td>
                <td>'.$rowVar['nombre'].'</td>
                <td>'.$rowVar['telefono'].'</td>
                <td>'.$rowVar['email'].'</td>
                <td>'.$rowVar['no_mesa'].'</td>
                <td>'.$rowVar['pax_mesa'].'</td>
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
        else{
            $y++;
            echo "
            <script>
            console.log(".$y.");
            </script>";
        }
        }
    
?>