
<?php
include ('../conexion/conexion.php'); //Incluimos un archivo de php
    $documento = $_POST['documento'];
    $fecha = $_POST['fecha'];


    $sql = "INSERT INTO asistencia (documento, fecha) 
            VALUES ('$documento', '$fecha')";

$query = mysqli_query($conectar, $sql);

    if($query){
        echo "Asistencia exitosa";
    }else{
        echo "Error de registro";
    }
?>
