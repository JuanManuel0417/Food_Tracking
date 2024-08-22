<!-- Este es el metodo para registrarse -->
<?php
include ('../conexion/conexion.php'); 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $contrasena = ($_POST['contrasena']); 

    $sql = "INSERT INTO registro (nombre, apellido, documento, correo, contrasena) 
            VALUES ('$nombre', '$apellido', '$documento', '$correo', '$contrasena')";

$query = mysqli_query($conectar, $sql);

    if($query){
        echo "Registro Exitoso";
    }else{
        echo "Error de registro";
    }
?>

