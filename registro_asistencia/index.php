<!DOCTYPE html>
<html lang="es">

<head>
    <title>Asistencia</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="www.marco.presting.pro">
    <meta name="author" content="Ing. Marco Antonio González Martinez">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <link rel="stylesheet" type="text/css" href="plugins/Bootstrap-3.3.7/css/bootstrap.css" />
    <link rel="stylesheet" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="plugins/jQuery-3.3.1/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="plugins/Bootstrap-3.3.7/js/bootstrap.js"></script>
    <script type="text/javascript" src="plugins/instascan/instascan.min.js"></script>
    <link rel="stylesheet" href="_css/instascan.min.css">
    <link rel="stylesheet" href="_css/as_refrigeerio.css">
    <link rel="stylesheet" href="_css/index.min.css">
    <script type="text/javascript" src="_js/index.js"></script>
</head>

<body style="background-color: white;">

	<header>
		<nav class="menu_navegacion">
			<ul>
				<li><a href="../index.php">Inicio</a></li>
				<li><a href="../recetas.php">Recetas</a></li>
				<li><a href="../restaurante.php">Restaurante</a></li>
				<li><a href="../refrigerio.php">Refrigerio</a></li>
				<li><a href="../conocenos.php">Conocenos</a></li>
			</ul>
		</nav>
	</header>

	<form action="../php/asistencia.php" method="post">
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
					<input type="number" id="documentoInput" placeholder="Ingrese su Documento" name="document">
				</td>
				<td>
					<input type="date" placeholder="Ingrese la fecha" name="date">
				</td>
				<td>
					<input type="checkbox">
				</td>
			</tr>
		</table>
		<button>Enviar</button>
	</form>


	<div class="container" style="width: 98%;">
		<div class="row">
			<div class="col-lg-offset-4 col-lg-4 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-qrcode fa-lg"></i> &nbsp; Lectura de Códigos QR</h3>
					</div>
					<div class="panel-body">
						<div class="contenedor" style="position:relative;">
							<div class="luz-lector">
								<img class="animate" src="img/luz_lector.png" alt="">
							</div>
							<video id="preview"
								style="border: 1px solid #CCC; border-radius: 5px; width: 100%; position: relative;"></video>
						</div>
					</div>
					<div class="panel-footer">
						<strong>Últimas Lecturas:</strong>
						<ul class="ultima-lectura"></ul>
						<audio id="lectura">
							<source src="_js/sounds/success.mp3">
						</audio>
					</div>

				</div>
			</div>
		</div>
	</div>
</body>

</html>