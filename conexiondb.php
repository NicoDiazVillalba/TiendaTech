<?php
$conexion = new mysqli("localhost", "root", "", "mi_tienda");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

echo "Conexión exitosa a MySQL";
?>