<?php
$host = "127.0.0.1";
$usuario = "root";
$contrasena = "";  // deja vacío si tu root no tiene contraseña
$bd = "contacts";
$puerto = 3307;   // puerto en el que corre tu MySQL

// Crear conexión
$conn = new mysqli($host, $usuario, $contrasena, $bd, $puerto);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
