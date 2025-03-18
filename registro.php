<?php

$conexion = new mysqli("localhost", "root", "", "mi_tienda");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $email = $conexion->real_escape_string($_POST['email']);
    $telefono = $conexion->real_escape_string($_POST['telefono']);

   
    $verificar = $conexion->query("SELECT * FROM clientes WHERE email='$email'");

    if ($verificar->num_rows > 0) {
        header("Location: index.html?registro=duplicado"); 
        exit();
    } else {
        $sql = "INSERT INTO clientes (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";

        if ($conexion->query($sql) === TRUE) {
            header("Location: index.html?registro=exitoso"); 
            exit();
        } else {
            header("Location: index.html?registro=error");
            exit();
        }
    }

    $conexion->close();
}
?>
