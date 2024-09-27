<?php

include('prcd/qc.php');

// sangre
$sqlSangre = "SELECT * FROM sangre ORDER BY id ASC";
$resultadosqlSangre = $conn->query($sqlSangre);

// semestre
$sqlSemestre = "SELECT * FROM semestre ORDER BY id ASC";
$resultadosqlSemestre = $conn->query($sqlSemestre);

// unidad académica
$sqlUAcademica = "SELECT * FROM unidad_academica ORDER BY id ASC";
$resultadoUAcademica = $conn->query($sqlUAcademica);

// programa
$sqlPrograma = "SELECT * FROM programa ORDER BY id ASC";
$resultadoPrograma = $conn->query($sqlPrograma);

?>