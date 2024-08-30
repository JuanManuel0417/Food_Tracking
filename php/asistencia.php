<?php
$host = "localhost";
$user = "root";
$password = "";
$bd  = "food_tracking"; // Reemplazar con el nombre de su base de datos

// Conexión desde php a MYSQL (Base de datos)
$conectar = mysqli_connect(
$host,
$user,
$password,
$bd);



$fecha = isset($_POST['fecha']) ? mysqli_real_escape_string($conectar, $_POST['fecha']) : '';

 // Capturar el estado del checkbox
$asistencia = isset($_POST['asistencia']) ? 1 : 0;

 // Insertar o actualizar el estado en la base de datos
$sql = "INSERT INTO asistencia (documento, fecha, asistencia) VALUES ('$documento', '$fecha', '$asistencia')";

if ($conectar->query($sql) === TRUE) {
    echo "Asistencia guardada correctamente.";
} else {
    echo "Error al guardar la asistencia: " . $conectar->error;
}
?>
