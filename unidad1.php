<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

</head>

<body>
	<div class="container">
		<header>
			<h1>Lorem.
			</h1>
			<nav>
				<?php include("botonera.php"); ?>
			</nav>
		</header>
		<section>
			<div class="container-md">
				<h2 class="" style="text-align: center;">Agenda de clases</h2>
			</div> <!-- agenda de clases -->


			<!-- boton toggle de agregar clase -->

			<p>
				<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#contraer" aria-expanded="false" aria-controls="contraer">
					Agregar una clase
				</button>
			</p>

			<!-- sentencia para mostrar si se guardo correctamente el registro o no -->
			<div class="row-sm-4">
				<?php
				if (isset($_GET['correcto'])) : ?>
					<p style="color:green"><b>¡Clase guardada correctamente!</b></p>
				<?php elseif (isset($_GET['error'])) : ?>
					<p style="color:red"><b>Error al agendar la clase</b></p>
				<?php endif; ?>
			</div>

			<!-- formulario con collapse -->
			<div class="collapse" id="contraer">
				<div>
					<?php
					include "formulario.php";
					?>
				</div>
			</div>
			<p>
				<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#ver_clases" aria-expanded="false" aria-controls="ver_clases">
					Ver clases
				</button>
			</p>
			<div class="collapse" id="ver_clases">
				<div class="container-fluid">
					<?php
					include "ver_clases.php";
					?>
				</div>
			</div>
	</div>
	</section>
	<aside>
	</aside>
	<footer>
		<a href="jonatandeporte.com.ar">Hecho por Jonatan Deporte</a>
	</footer>

	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>