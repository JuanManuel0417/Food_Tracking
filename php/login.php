
<?php
include ('../conexion/conexion.php'); //Incluimos un archivo de php
include('../conexion/session.php'); // Para manejo de sesión

// reemplace la tabla usuarios por el nombre de la table de su base de datos para autenticarse, y reemplace los campos username y password, por los campos //que usted tiene en su tabla

$sql = "select * from registro where documento = '".$_POST['documento']."'
and contrasena = '".$_POST['contrasena']."' ";
$query = mysqli_query($conectar, $sql);
$rows = mysqli_num_rows($query);

    if($rows){
        $datos = mysqli_fetch_assoc($query); // OBtenter los atos de la consulta

        $_SESSION['usuario'] = $datos ['nombre'];

        header ('Location: ../index.php');
    }else{
        echo "No autenticado";
    }
?>
