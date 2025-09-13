<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Agregar Contacto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="add-container">
    <div>
        <h1>Agregar Contacto</h1>
        <a href="index.php">Volver a la lista</a>

        <?php
        include "db.php";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];

            $conn->query("INSERT INTO contactos (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')");
            header("Location: index.php");
        }
        ?>

        <form method="post">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
            
            <label>Email:</label>
            <input type="email" name="email" required>
            
            <label>Teléfono:</label>
            <input type="text" name="telefono" required>
            
            <input type="submit" value="Agregar">
        </form>
    </div>
</div>

</body>
</html>
