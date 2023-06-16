<html>
    <header>
    <meta charset="utf-8">
        <link rel="icon" type="image/png" href="../../assets/brand/img/ico.ico"/>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="../QR/ajax_generate_code.js"></script>
        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600&display=swap" rel="stylesheet">
        <!-- font -->
    <header>
        <style>
            body{
                font-family: 'Titillium Web', sans-serif;
            }
        </style>
<body>
    
<?php    

    session_start();
    include('../prcd/qc.php');
    // include('../QR/phpqrcode/qrlib.php'); 

    date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
    $fecha_qr = strftime("%Y-%m-%d,%H:%M:%S");
    $repetidos = 0;
    $Norepetidos = 0;

    // $id = $_POST['id'];
 
    // Allowed mime types
    $fileMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );
 
    // Validate whether selected file is a CSV file
    if (!empty($_FILES['csv']['name']) && in_array($_FILES['csv']['type'], $fileMimes))
    {
        
 
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['csv']['tmp_name'], 'r');
 
            // Skip the first line
            fgetcsv($csvFile);
 

            function generarCodigo($longitud) {
                $key = '';
                $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
                $max = strlen($pattern)-1;
                for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
                return $key;
                }
            // Parse data from CSV file line by line
             // Parse data from CSV file line by line
             $x=0;
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE)
            {
                $x++;
                //genera un código de 9 caracteres de longitud.
                $codigo = generarCodigo(9);

                // Get row data
                $nombre = $getData[0];
                $telefono = $getData[1];
                $email = $getData[2];
                $mesa = $getData[3];

                $idQr = $telefono.'_'.$codigo;
                                
                    mysqli_query($conn, "INSERT INTO asistentes (nombre, telefono, email, no_mesa,idQr) VALUES ('" . $nombre . "', '" . $telefono . "', '" . $email . "', '" . $mesa . "', '" . $idQr . "')");
            }

            // Close opened CSV file
            fclose($csvFile);
            
                echo "<script type=\"text/javascript\">
                Swal.fire({
                    icon: 'success',
                    imageUrl: '',
                    imageHeight: 200,
                    imageAlt: 'Eventos',
                    title: 'Asistentes agregados',
                    text: 'Se agregaron ".$x." y se descartaron',
                    confirmButtonColor: '#3085d6',
                    footer: 'Eventos'
                }).then(function(){window.location='../alta_asistentes.php';});</script>";

        
    }
    else
    {
        echo "Selecciona un archivo válido";
    }
// }
?>
</body>

</html>