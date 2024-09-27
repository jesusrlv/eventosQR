<?php

// server prueba
    //$servername="localhost";
    //$database="qrs"; //solo se quitó para conexión remota
    //$username="root";
    //$password="";

// server smartevent.com.mx
$servername="localhost";
$database="smarteve_qrs";
$username="smarteve_root";
$password="%3cdD}CS^W5-dB3";

    $conn= new mysqli ($servername,$username,$password,$database); //solo se quitó para conexión remota
    $conn->set_charset("utf8");

    ?>