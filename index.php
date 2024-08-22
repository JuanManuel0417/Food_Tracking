<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Inicio</title>
    <link rel="stylesheet" href="Css/index.css">
    <link rel="stylesheet" href="Css/chat.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="menu_navegacion">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="recetas.php">Recetas</a></li>
            <li><a href="restaurante.php">Restaurante</a></li>
            <li><a href="refrigerio.php">Refrigerio</a></li>
            <li><a href="conocenos.php">Conocenos</a></li>
            <li><a href="register.php">Registrate</a></li>
        </ul>
    </nav>

    <div class="banner">
        <img src="Assets/img/Banner.png" alt="Cargando Imagen" width="100%">
    </div>

    <h1>NOVEDADES</h1>
    <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident vitae similique ut officia nulla sapiente
        voluptatibus vel rerum deleniti reprehenderit, aliquam corporis debitis suscipit, deserunt nemo aliquid!
        Nesciunt, numquam minima. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic corrupti deserunt dicta!
        Laboriosam deleniti nemo culpa voluptate repellat quaerat, error adipisci ipsum dignissimos fuga vel perferendis
        dolorem a expedita modi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, voluptatibus
        cupiditate. Voluptate animi perferendis, ratione iure reiciendis eligendi odio distinctio voluptatum laborum
        praesentium aliquam hic recusandae doloribus. Laborum, odio neque.</P><br><br><br><br>

    <div class="contenedor-principal">
        <button class="btn-53" id="toqueBoton">
            <div class="original">Asistente</div>
            <div class="letters">
                <span>V</span>
                <span>I</span>
                <span>R</span>
                <span>T</span>
                <span>U</span>
                <span>A</span>
                <span>L</span>
            </div>
        </button>
    </div>

    <div class="contenedor-chat" id="contenedorChat" style="display: none;">
        <div class="caja-chat">
            <div class="encabezado-chat">
                <div class="contenido-encabezado">
                    <h2 class="titulo-chat">Asistente Bartolomé</h2>
                    <div class="estado">En línea</div>
                </div>
            </div>
            <div class="visualizacion-chat" id="visualizacionChat">
                <div class="mensaje-chat mensaje-bot">Hola, es un placer atenderte. Por favor, escribe una opción para
                    que pueda ayudarte. <br><br>
                    1: Me gustaría saber. ¿Qué es Food Tracking?<br>
                    2: ¿Cómo puedo ser beneficiario del programa PAE?<br>
                    3: Quiero obtener un curso gratuito de cocina <br>
                    4: Necesito contactarme con un administrador</div>
            </div>
            <div class="contenedor-entrada-chat">
                <div class="grupo-entrada">
                    <input placeholder="Escribe tu mensaje..." class="entrada-chat" id="entradaChat" type="text">
                    <button class="boton-enviar" id="botonEnviar">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <video src="Assets/img/Video_Educativo.mp4" class="w-100" controls>Cargando Video</video>

            <section class="section2">
                <p id="aciertos" class="estadisticas">Aciertos: 0</p>
                <p id="t-restante" class="estadisticas">Tiempo restante: 35 segundos</p>
                <p id="movimientos" class="estadisticas">Movimientos: 0</p>
            </section>
        </div>
        <div class="col-md-6">
            <main>
                <section class="section1">
                    <h1>🎲 Juego de Memoria 🎲</h1>
                    <table class="table table-bordered">
                        <tr>
                            <td><button id="0" class="btn btn-light" onclick="destapar(0)"></button></td>
                            <td><button id="1" class="btn btn-light" onclick="destapar(1)"></button></td>
                            <td><button id="2" class="btn btn-light" onclick="destapar(2)"></button></td>
                            <td><button id="3" class="btn btn-light" onclick="destapar(3)"></button></td>
                        </tr>
                        <tr>
                            <td><button id="4" class="btn btn-light" onclick="destapar(4)"></button></td>
                            <td><button id="5" class="btn btn-light" onclick="destapar(5)"></button></td>
                            <td><button id="6" class="btn btn-light" onclick="destapar(6)"></button></td>
                            <td><button id="7" class="btn btn-light" onclick="destapar(7)"></button></td>
                        </tr>
                        <tr>
                            <td><button id="8" class="btn btn-light" onclick="destapar(8)"></button></td>
                            <td><button id="9" class="btn btn-light" onclick="destapar(9)"></button></td>
                            <td><button id="10" class="btn btn-light" onclick="destapar(10)"></button></td>
                            <td><button id="11" class="btn btn-light" onclick="destapar(11)"></button></td>
                        </tr>
                        <tr>
                            <td><button id="12" class="btn btn-light" onclick="destapar(12)"></button></td>
                            <td><button id="13" class="btn btn-light" onclick="destapar(13)"></button></td>
                            <td><button id="14" class="btn btn-light" onclick="destapar(14)"></button></td>
                            <td><button id="15" class="btn btn-light" onclick="destapar(15)"></button></td>
                        </tr>
                    </table>
                </section>

                <div class="modal" id="modal">
                    Game Over
                </div>
            </main>
        </div>
    </div>
    </div>

    <footer class="pie_pagina">
        <div class="info_contacto">
            <h4>Contacto</h4>
            <p>Email: gonzalezmejiaj264@gmail.com</p>
            <p>Teléfono: (+57) 300 103 74 20</p>
        </div>

        <div class="redes_sociales">
            <h4>Síguenos</h4>
            <a href="https://www.facebook.com/juanmanuel.gonzalez0417" target="_blank">Facebook</a>
            <a href="https://www.instagram.com/gonzalezzw_17/" target="_blank">Instagram</a>
            <a href="https://github.com/JuanManuel0417" target="_blank">GitHub</a>
        </div>

        <div class="derechos_reservados">
            <p>&copy; 2024 Food Tracking. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="JavaScript/index.js"></script>
    <script src="JavaScript/chat.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>