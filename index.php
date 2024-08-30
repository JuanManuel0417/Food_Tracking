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
<header>
    <?php  include('template/menus.php'); ?>
    </header>

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

        <?php  include('chatbot.php'); ?>

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

    <footer>
    <?php  include('template/footers.php'); ?>
    </footer>

    <script src="JavaScript/index.js"></script>
    <script src="JavaScript/chat.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>