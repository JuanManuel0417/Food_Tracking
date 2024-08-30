<?php
include('conexion/session.php');

if(isset($_SESSION['usuario'])){
include('php/asistencia.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia Refrigerio</title>
    <link rel="stylesheet" href="Css/restaurante.css">
    <link rel="stylesheet" href="Css/chat.css">
</head>
<body>
    <header>
    <?php  include('template/menus.php'); ?>
    </header>
    <h2>Listado de Asistencia</h2>
    <form action="refrigerio.php" method="post">
    <select class="grupo" name="grupo">
        <option value="">Seleccione un grupo</option>
        <option value="11°">11°</option>
        <option value="10°2">10°2</option>
        <option value="10°1">10°1</option>
        <option value="9°2">9°2</option>
        <option value="9°1">9°1</option>
        <option value="8°2">8°2</option>
        <option value="8°1">8°1</option>
        <option value="7°2">7°2</option>
        <option value="7°1">7°1</option>
        <option value="6°3">6°3</option>
        <option value="6°2">6°2</option>
        <option value="6°1">6°1</option>
        <option value="5°2">5°2</option>
        <option value="5°1">5°1</option>
        <option value="4°2">4°2</option>
        <option value="4°1">4°1</option>
        <option value="3°2">3°2</option>
        <option value="3°1">3°1</option>
        <option value="2°2">2°2</option>
        <option value="2°1">2°1</option>
        <option value="1°2">1°2</option>
        <option value="1°1">1°1</option>
        <option value="Preescolar">Preescolar</option>
    </select>
    <button>Mostrar Grupo</button>
    </form>
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
</html>
<?php
}else
    echo "Por favor inicia sesión para ingresar a este panel";
?>
