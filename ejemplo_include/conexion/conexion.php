<?php
$conexion = new mysqli($server, $usuario, "",$db);
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
    $resultado = $conexion->query("SELECT id_equipo,nombre,ciudad FROM equipo");
}
?>