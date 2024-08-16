<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="Css/logins.css">
    <link rel="stylesheet" href="Css/forumalrio.css">
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
                    <a href="recetas.php">Recetas</a>
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
                                <input type="number" placeholder="Documento" name="document" class="flip-card__input">
                                <input type="password" placeholder="Contraseña" name="password"
                                    class="flip-card__input">
                                <button class="flip-card__btn">Ingresar</button>
                            </form>

                        </div>


                        <div class="flip-card__back">
                            <div class="title">Registrarse</div>

                            <form method="post" action="php/registro.php" class="flip-card__form">
                                <input type="text" placeholder="Nombre" class="flip-card__input" name="nombre">
                                <input type="text" placeholder="Apellido" class="flip-card__input" name="apellido">
                                <input type="number" placeholder="Documento" class="flip-card__input" name="documento">
                                <input type="email" placeholder="Correo" class="flip-card__input" name="correo">
                                <input type="password" placeholder="Password" class="flip-card__input"
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