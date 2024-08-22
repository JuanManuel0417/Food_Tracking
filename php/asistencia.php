<!-- Esta es la funcion para mandar los registros a la taba -->
<?php
include ('../conexion/conexion.php'); //Incluimos un archivo de php
    $documento = $_POST['document'];
    $fecha = $_POST['date'];

    $sql = "select * from registro where documento ='".$documento."' ";
    $query = mysqli_query($conectar, $sql);
    $rows = mysqli_num_rows($query);
        if($rows >0) {
            $sql = "INSERT INTO asistencia (documento, fecha) 
            VALUES ('$documento', '$fecha')";
            $query = mysqli_query($conectar, $sql);
            echo "Registro exitoso";

        }else{
            echo "Documento no registrado";
        }
?>
