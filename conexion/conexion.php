<!-- Conexión a toda la database -->
<?php
$host = "localhost";
$user = "root";
$password = "";
$bd  = "foodtracking"; // Reemplazar con el nombre de su base de datos

// Conexión desde php a MYSQL (Base de datos)
$conectar = mysqli_connect(
$host,
$user,
$password,
$bd);
?>