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

	$sql = "select * from datos";
	$datos = mysqli_query($conexion,$sql);
?>
	<h2>Datos</h2>
	<br><br>
	<table>
		<thead>
			<tr>
			    <th>Nombre</th>
			    <th>Direccion</th>
			    <th>Celular</th>
			    <th>Correo</th>
  			</tr>
		</thead>
	
	<?php 
		while ($r = mysqli_fetch_array($datos)) {
		   $nombre = $r ['nombre'];
		   $direccion = $r ['direccion'];
		   $celular = $r ['celular'];
		   $correo = $r ['correo'];
		?>
		   
		   		<tr>
		   			<td><?php echo "$nombre"; ?></td>
					<td><?php echo "$direccion"; ?></td>
					<td><?php echo "$celular"; ?></td>
					<td><?php echo "$correo"; ?></td>
		   		</tr>
		   <?php 
		}
		   ?>
		</table>
		<br><br>

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