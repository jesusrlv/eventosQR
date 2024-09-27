<?php
    include('qc.php');

        date_default_timezone_set('America/Mexico_City');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

        $evento = $_POST['evento'];
        $cadena = $_POST['c'];

        $sql = "SELECT * FROM asistentes WHERE idQr = '$cadena'";
        $resultadoSql = $conn->query($sql);
        $rowQuery = $resultadoSql->fetch_assoc();


        echo'
        <p class="pb-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Nombre completo:</strong>
              '.$rowQuery['nombre'].'
            </p>
            <p class="pb-3 mt-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Mesa:</strong>
              '.$rowQuery['no_mesa'].'
            </p>
            <p class="pb-3 mt-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Número de invitados:</strong>
              '.$rowQuery['pax_mesa'].'
            </p>
        ';

?>