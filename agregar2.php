<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Diseño.css">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<?php 
	require 'conexion.php';

	$n = $_POST ['nombre'];
	$d = $_POST['direccion'];
	$c = $_POST['celular'];
	$e = $_POST['correo'];

	$sql1 = "INSERT INTO `datos`(`nombre`, `direccion`, `celular`, `correo`) 
			 VALUES ('$n','$d','$c','$e')";

	mysqli_query($conexion,$sql1);
	?>
	<p>Datos capturados correctamente</p>

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

<form action="index.php">
	<input type="submit" value="Menú principal">
</form>
