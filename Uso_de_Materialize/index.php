<?php
include('./logica/db.php');
$consulta= "SELECT * FROM usuarios";
$result = $conexion->query($consulta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
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
        <div class="row">
            <div class="col s3">
                <section class="container center-align">
                    <img class="responsive-img" src="./media/fes.png" alt="Imagen de decoracion" style="width: 120px; height: 120px;">
                </section>
            </div>
            <div class="col s6">
                <section class="container center-align">    
                    <h1 class="white-text">FES Aragon</h1> 
                </section>
            </div>
            <div class="col s3">
                <section class="container center-align">
                    <img class="responsive-img" src="./media/unam.png" alt="Imagen de decoracion" style="width: 120px; height: 120px;">
                </section>
            </div>
        </div>
    </header>
    <div class="container">
        <section>
            <h1 class="orange-text center-align">Usuarios</h1>
        </section>
        <section>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td>
                    <a href="./logica/update.php?id=<?php echo $row['id']; ?>"><button class="btn waves-effect waves-light blue" type="submit" name="action">Editar</button></a>
                    <a href="./logica/delete.php?id=<?php echo $row['id']; ?>"><button class="btn waves-effect waves-light red" type="submit" name="action">Eliminar</button></a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <br>
        <section class="center-align">
            <a href="./logica/create.php"> <button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="action">Agregar Usuarios</button></a>
        </section>
        <br>
    </div>
        <footer class="page-footer deep-orange accent-3">
          <div class="container center-align">
            <div class="row">
              <div class="col s12">
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
