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
	$nom1 = $_POST['nom'];

	$n = $_POST ['nombre'];
	$d = $_POST['direccion'];
	$c = $_POST['celular'];
	$e = $_POST['correo'];

	$sql1 = "update datos set nombre='$n', direccion='$d', celular='$c', correo='$e' where nombre='$nom1'";
	mysqli_query($conexion,$sql1);
?>

	<p>Registro modificado exitosamente <br></p>

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