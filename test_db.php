<?php
$host = "127.0.0.1";
$usuario = "root";
$contrasena = "";
$bd = "contacts";

// Crear conexión (añadimos puerto 3307)
$conn = new mysqli($host, $usuario, $contrasena, $bd, 3307);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "¡Conexión a la base de datos exitosa!";
}
?>
