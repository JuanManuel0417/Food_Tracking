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


if (isset($_POST['grupo']) && !empty($_POST['grupo'])) {
    $grupo = mysqli_real_escape_string($conectar, $_POST['grupo']);


    // Consulta SQL para obtener estudiantes del grupo seleccionado
    $query = "SELECT documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido FROM registro WHERE grupo = '$grupo'";
    $result = mysqli_query($conectar, $query);
}
?>
