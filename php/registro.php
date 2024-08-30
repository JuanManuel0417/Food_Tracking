
<?php
include ('../conexion/conexion.php'); //Incluimos un archivo de php
    $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $contrasena = ($_POST['contrasena']); // Encriptar la contraseña
    $rol = $_POST['rol'];
    $grupo = $_POST['grupo'];
    $beneficio = $_POST['beneficio'];

        // Verificar si el documento ya existe en la base de datos
    $sql_check = "SELECT documento FROM registro WHERE documento = ?";
    $stmt_check = $conectar->prepare($sql_check);
    $stmt_check->bind_param("s", $documento);
    $stmt_check->execute();
    $stmt_check->store_result();

    // Comprobar si se encontró alguna fila
    if ($stmt_check->num_rows > 0) {
        echo "Error: El usuario ya está registrado.";
    } else {

    $sql = "INSERT INTO registro (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, documento, correo, contrasena, rol, grupo, beneficio) 
            VALUES ('$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$documento', '$correo', '$contrasena','$rol','$grupo','$beneficio')";

    $query = mysqli_query($conectar, $sql);

        if($query){
            header ('Location: ../register.php');
        }else{
            echo "Error de registro";
        }
    }
?>

