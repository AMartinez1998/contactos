<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Contactos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include "db.php";

// Obtener todos los contactos
$result = $conn->query("SELECT * FROM contactos");
?>

<h1>Lista de Contactos</h1>
<a href="add.php">Agregar contacto</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Acciones</th>
    </tr>

    <?php if($result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['telefono'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Editar</a>
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Seguro que quieres eliminar este contacto?')">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr>
            <td colspan="5" style="text-align:center;">No hay contactos aún</td>
        </tr>
    <?php endif; ?>
</table>

</body>
</html>
