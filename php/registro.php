<!-- Este es el metodo para registrarse -->
<?php
include ('../conexion/conexion.php'); 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $contrasena = ($_POST['contrasena']); // Encriptar la contraseña
    $rol = $_POST['rol'];
    $grupo = $_POST['grupo'];

    $sql = "INSERT INTO registro (nombre, apellido, documento, correo, contrasena, rol, grupo) 
            VALUES ('$nombre', '$apellido', '$documento', '$correo', '$contrasena','$rol','$grupo')";

$query = mysqli_query($conectar, $sql);

    if($query){
        header ('Location: ../register.php');
    }else{
        echo "Error de registro";
    }
?>

