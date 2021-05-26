<?php
// conexion a BD
include "conexion.php";
//Variables que reciben datos del formulario
$unidad_formu = $_POST['unidad'];
$fecha_formu = $_POST['fecha'];

// almacenamiento de datos en la BD

mysqli_query($base_de_datos, "INSERT INTO clases VALUES (DEFAULT,'$unidad_formu',
'$fecha_formu')");

$consulta = mysqli_query($base_de_datos, "SELECT unidad,fecha from clases where unidad ='$unidad_formu' and fecha ='$fecha_formu'");
// Sentencia de validacion de datos
if ($user = mysqli_fetch_assoc($consulta)) {
    header("Location: unidad1.php?correcto");
} else {
    header("Location: unidad1.php?error");
}
