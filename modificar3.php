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

	$dec = $_POST['decision'];
	$nom = $_POST['nombre1'];
?>
<h2>Modificación de datos</h2>
<?php  	
	if ($dec == 'si') {
		?>
		<form action="modificar4.php" method="post">
			<p>Nombre anterior: <br><input type="text" readonly="readonly" name="nom" value="<?php echo $nom; ?>"><br><br></p>
			<p><label for="">Nuevo nombre: </label><input type="text" name="nombre" placeholder="max: 15 campos" size="15"></p>
			<p><label for="">Nueva direccion: </label><input type="text" name="direccion" placeholder="max: 30 campos" size="30"></p>
			<p><label for="">Nuevo celular: </label><input type="tel" name="celular" pattern="[0-9]{10}" placeholder="digite 10 dígitos" size="10"></p>
			<p><label for="">Nuevo correo: </label><input type="email" pattern=".+@hotmail\.com" size="30" name="correo" required placeholder="Correo @hotmail.com"></p>
		<input type="submit" value="Guardar">
		</form>
		<?php  
			} else { 
		?>
		<p>Registro no modificado <br><br></p>
		<?php
			} 
		?>
	
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
	<br>
	<input type="submit" value="Menú principal">
</form>