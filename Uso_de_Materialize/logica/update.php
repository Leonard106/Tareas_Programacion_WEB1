<?php
include('db.php');

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id=$id";
$result = $conexion->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE usuarios SET nombre='$nombre', email='$email', telefono='$telefono' WHERE id=$id";
    
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
    <title>Editar Usuario</title>
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<style>
    body {
        margin: 0;
        padding: 0;
    }
    
    header {
        margin: 0;
        padding: 5px 0;
    }
</style>
<body>
    <header class="orange">
    <section class="container center-align">    
    <h1 class="white-text">FES Aragon</h1> 
    </section>
    </header>
    <div class="container">
    <h1 class="orange-text center-align">Editar Usuario</h1>
    <form method="POST" action="update.php?id=<?php echo $id; ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>" required><br>
        <section class="center-align">
            <button class="btn waves-effect waves-light blue" type="submit" valor="Actualizar Usuario" name="action">Actualizar Usuario</button>
        </section>
    </form>
    <br>
    <a href="../index.php"><button class="btn waves-effect waves-light" type="submit" name="action">Volver a la lista</button></a>
    </br>
    <br>
    </div>
        <footer class="page-footer deep-orange accent-3">
          <div class="container center-align">
            <div>
              <div>
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright center-align">
            <div class="container">
            © 2025 Copyright Text
            </div>
          </div>
        </footer>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
