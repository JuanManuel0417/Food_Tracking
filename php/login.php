<!-- Esta es la funcion para que un usuario luego de registrarse, se pueda loguear -->
<?php
include ('../conexion/conexion.php'); //Incluimos un archivo de php

// reemplace la tabla usuarios por el nombre de la table de su base de datos para autenticarse, y reemplace los campos username y password, por los campos //que usted tiene en su tabla

$sql = "select * from registro 
where documento = '".$_POST['document']."'
and contrasena = '".$_POST['password']."'";
$query = mysqli_query($conectar, $sql);
$rows = mysqli_num_rows($query);

if ($rows) {
    // Si el usuario está autenticado, redirigir a index.php
    header("Location: ../index.php");
    exit(); // Asegurarse de que el script se detenga después de la redirección
} else {
    // Si no está autenticado, mostrar un mensaje de error
    echo "No autenticado";
}
?>
