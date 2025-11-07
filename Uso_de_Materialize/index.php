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
<?php include('./head.php'); ?>
<body>
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
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
<?php  include('./footer.php');  ?>
</html>
