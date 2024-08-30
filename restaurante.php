<?php
include('conexion/session.php');
include('php/asistencia.php');

if(isset($_SESSION['usuario'])){ 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Restaurante</title>
    <link rel="stylesheet" href="Css/restaurante.css">
    <link rel="stylesheet" href="Css/chat.css">
</head>

<body>
<header>
    <?php  include('template/menus.php'); ?>
    </header>

    <h2>Listado de Asistencia</h2>
    <form action="php/asistencia.php" method="post">
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Fecha</th>
                <th>Asistencia</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['documento']; ?></td>
                <td><div class="fecha-actual" name="fecha"></div></td>
                <td><input type="checkbox"></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <button class="boton_confirmar">Confirmar</button>
    </form>

    <?php  include('chatbot.php'); ?>
            

    <footer>
    <?php  include('template/footers.php'); ?>
    </footer>

    <script src="JavaScript/chat.js"></script>
    <script>
    function actualizarFecha() {
        const fechaElementos = document.querySelectorAll(".fecha-actual");
        const fechaActual = new Date();
        const opciones = { year: 'numeric', month: 'numeric', day: 'numeric' };
        const fechaFormateada = fechaActual.toLocaleDateString('es-ES', opciones);

        // Itera sobre todos los elementos de fecha y actualiza el texto
        fechaElementos.forEach(elemento => {
            elemento.textContent = fechaFormateada;
        });
    }

    // Llama a la función para establecer la fecha en todos los elementos
    actualizarFecha();
</script>

</body>
</html>

<?php
}else
    echo "Por favor inicia sesión para ingresar a este panel";
?>
