<?php
include ('../conexion/conexion.php'); //Incluimos un archivo de php

// reemplace la tabla usuarios por el nombre de la table de su base de datos para autenticarse, y reemplace los campos username y password, por los campos //que usted tiene en su tabla

$sql = "select * from registro 
where documento = '".$_POST['document']."'
and contrasena = '".$_POST['password']."' ";
$query = mysqli_query($conectar, $sql);
$rows = mysqli_num_rows($query);

    if($rows){
        echo "Autenticado";
    }else{
        echo "No autenticado";
    }


    // nombres, apellidos, documento, contrasena