<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Diseño.css">
	<title>Agenda</title>
</head>
<body>
	<h1>Agenda</h1>
	<form action="consultar.php">
       <input type="submit" value="Consultar">
       <br><br>
	</form>
	<form action="agregar.php">
       <input type="submit" value="Capturar">
       <br><br>
	</form>
	<form action="buscar2.php">
       <input type="submit" value="Busqueda">
       <br><br>
	</form>
	<form action="eliminar.php">
       <input type="submit" value="Eliminar">
       <br><br>
	</form>
	<form action="modificar.php">
       <input type="submit" value="Modificar">
       <br><br>
	</form>

	<footer>
		<?php
		echo "Creado por:";
		echo "<br>";
		echo "Diego Ovando Quevedo";
		echo "<br><br>";
		echo "Contacto";
		echo "<br>2019030340@upsin.edu.mx";
		echo "<br><br>";
		?>
	</footer>
</body>
</html>