<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia Refrigerio</title>
    <link rel="stylesheet" href="Css/as_refrigeerio.css">

</head>
<body>
    <header>
        <nav class="menu_navegacion">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="recetas.php">Recetas</a></li>
                <li><a href="restaurante.php">Restaurante</a></li>
                <li><a href="refrigerio.php">Refrigerio</a></li>
                <li><a href="conocenos.php">Conocenos</a></li>
            </ul>
        </nav>
    </header>

    <form action="envio.php" method="post>
        <table border="1">
            <tr>
                <td>
                    <h3>Documento</h3>
                </td>
                <td>
                    <h3>Fecha</h3>
                </td>
                <td>
                    <h3>Asistencia</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="number" placeholder="Ingrese su Documento">
                </td>
                <td>
                    <input type="date" placeholder="Ingrese la fecha" name="fecha">
                </td>
                <td>
                    <input type="checkbox">
                </td>
            </tr>
            
        </table>
        <button type="button">Enviar</button>
    </form>
</body>
</html>