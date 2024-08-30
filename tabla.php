<?php
include('conexion/conexion.php'); // Conexión a la base de datos

// Consultar datos de la tabla registro
$sql = "SELECT nombre, apellido, documento FROM registro";
$result = mysqli_query($conectar, $sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de Asistencia</title>
</head>

<body>
    <h1>Listado de Asistencia</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Asistencia</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['documento']; ?></td>
                <td>
                    <input type="checkbox">
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>