<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";
    
    if ($conexion->query($sql) === TRUE) {
        header('Location: ../index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<?php include('../head.php'); ?>
<body>
    <div class="container">
    <h1 class="orange-text center-align">Agregar Usuario</h1>
    <form method="POST" action="create.php">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Teléfono:</label>
        <input type="text" name="telefono" required><br>
        <section class="center-align">
        <button class="btn waves-effect waves-light light-blue darken-4" type="submit" valor="Agregar Usuario" name="action">Agregar Usuario</button>
        </section>
    </form>
    <br>
    <a href="../index.php"><button class="btn waves-effect waves-light" type="submit" name="action">Volver a la lista</button></a>
    </br>
    <br>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
<?php  include('../footer.php');  ?>
</html>
