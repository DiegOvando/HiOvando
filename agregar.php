<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Diseño.css">
	<title>Agregar</title>
</head>
<body>
	<form action="agregar2.php" method="post">
		<h2>Alta en agenda</h2>
		<p><label for="">Nombre: </label><input type="text" name="nombre" placeholder="max: 15 campos" size="15"></p>
		<p><label for="">Direccion: </label><input type="text" name="direccion" placeholder="max: 30 campos" size="30"></p>
		<p><label for="">Celular: </label><input type="tel" name="celular" pattern="[0-9]{10}" placeholder="digite 10 dígitos" size="10"></p>
		<p><label for="">Correo: </label><input type="email" pattern=".+@hotmail\.com" size="30" name="correo" required placeholder="Correo @hotmail.com"></p>
		<input type="submit" value="Guardar">
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