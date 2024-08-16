<?php

$host  = "localhost"; //Nombre servido
$user = "root";  //Nombre de usuario
$pass = ""; //Contraseña
$database = "foodtracking"; //Nombre de base de datos

$conectar = mysqli_connect($host, $user, $pass, $database);



if (isset($_POST["apellido"]) && isset($_POST["nombre"])){
    echo "El nombre es: ".$_POST["nombre"];
    echo "<br>";
    echo "El apellido es: ".$_POST["apellido"];
}


$insert = "insert into registros (nombre, apellido)
    values('".$_POST['nombre']."', '".$_POST['apellido']."')";
    $query = mysqli_query($conectar, $insert);


    if ($query){
        echo "<br>Insertó información";
    }else{
        echo "No inserto información";
    }
?>