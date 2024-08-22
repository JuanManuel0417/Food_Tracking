<!-- Esto hace referencia al loguin del restaurante -->
<?php
include ('../conexion/conexion.php'); //Conexion a la database

//Falta agregar una manera de que tambien se verifique el rol
$sql = "select * from roles 
where documento = '".$_POST['document']."'
and documento = '".$_POST['password']."' ";
$query = mysqli_query($conectar, $sql);
$rows = mysqli_num_rows($query);

if ($rows) {
    header("Location: ../registro_asistencia/index.php");
    exit(); // El script se detiene luego de la redireccion 
} else {
    // Si no esta autenticado, mostrar un mensaje de error
    echo "No autenticado";
}
?>