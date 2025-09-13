<?php
include "db.php";

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM contactos WHERE id=$id");
$contacto = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $conn->query("UPDATE contactos SET nombre='$nombre', email='$email', telefono='$telefono' WHERE id=$id");
    header("Location: index.php");
}
?>

<h1>Editar Contacto</h1>
<form method="post">
    Nombre: <input type="text" name="nombre" value="<?= $contacto['nombre'] ?>" required><br><br>
    Email: <input type="email" name="email" value="<?= $contacto['email'] ?>" required><br><br>
    Teléfono: <input type="text" name="telefono" value="<?= $contacto['telefono'] ?>" required><br><br>
    <input type="submit" value="Actualizar">
</form>
<a href="index.php">Volver</a>
