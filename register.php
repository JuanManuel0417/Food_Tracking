<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="Css/logins.css">
    <link rel="stylesheet" href="Css/formulario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header class="bg_animate">
        <div class="header_nav">
            <div class="contenedor">
                <h1> </h1>
                <nav>
                    <a href="index.php">Inicio</a>
                    <a href="conocenos.php">Conocenos</a>
                </nav>
            </div>
        </div>

        <div class="wrapper">
            <div class="card-switch">
                <label class="switch">
                    <input class="toggle" type="checkbox">
                    <span class="slider"></span>
                    <span class="card-side"></span>
                    <div class="flip-card__inner">
                        <div class="flip-card__front">
                            <div class="title">Iniciar Sesión</div>

                            <form action="php/login.php" method="post" class="flip-card__form">
                                <input type="number" placeholder="Documento" name="documento" class="flip-card__input">
                                <input type="password" placeholder="Contraseña" name="contrasena"
                                    class="flip-card__input">
                                <button class="flip-card__btn">Ingresar</button>
                            </form>

                        </div>


                        <div class="flip-card__back">
                            <div class="title">Registrarse</div>

                            <form method="post" action="php/registro.php" class="flip-card__form">
                            <select id="rol" name="rol" class="flip-card__input">
                                <option value="">Rol</option>
                                <option value="estudiante">Estudiante</option>
                                <option value="profesor">Profesor</option>
                                <option value="administrador">Administrador</option>
                                <option value="padre">Padre de Familia</option>
                            </select>
                            <select id="grupo" name="grupo" class="flip-card__input">
                                <option value="">Grupo</option>
                                <option value="11°">11</option>
                                <option value="10°2">10-2</option>
                                <option value="10°1">10-1</option>
                                <option value="9°2">9-2</option>
                                <option value="9°1">9-1</option>
                                <option value="8°2">8-2</option>
                                <option value="8°1">8-1</option>
                                <option value="7°2">7-2</option>
                                <option value="7°1">7-1</option>
                                <option value="6°3">6-3</option>
                                <option value="6°2">6-2</option>
                                <option value="6°1">6-1</option>
                                <option value="5°2">5-2</option>
                                <option value="5°1">5-1</option>
                                <option value="4°2">4-2</option>
                                <option value="4°1">4-1</option>
                                <option value="3°2">3-2</option>
                                <option value="3°1">3-1</option>
                                <option value="2°2">2-2</option>
                                <option value="2°1">2-1</option>
                                <option value="1°2">1-2</option>
                                <option value="1°1">1-1</option> 
                                <option value="preescolar">Preescolar</option> 
                            </select>
                                <input type="text" placeholder="Nombre" class="flip-card__input" name="nombre">
                                <input type="text" placeholder="Apellido" class="flip-card__input" name="apellido">
                                <input type="number" placeholder="Documento" class="flip-card__input" name="documento">
                                <input type="email" placeholder="Correo" class="flip-card__input" name="correo">
                                <input type="password" placeholder="Contraseña" class="flip-card__input"
                                    name="contrasena">
                                <button class="flip-card__btn">Confirmar</button>
                            </form>


                        </div>
                    </div>
                </label>
            </div>
        </div>

        <div class="banner_img">
            <img src="Assets/img/LogoConFondo.jpg" alt="">
        </div>

        <div class="burbujas">
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
        </div>
    </header>

</body>

</html>