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

	$nom = $_POST['nombre'];
	$sql = "select * from datos where nombre='$nom'";
	$datos = mysqli_query($conexion,$sql);
?>
<h2>Datos del usuario seleccionado</h2>
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
		   $nombre1 = $r ['nombre'];
		   $direccion = $r ['direccion'];
		   $celular = $r ['celular'];
		   $correo = $r ['correo'];
?>
		   <tr>
		   			<td><?php echo "$nombre1"; ?></td>
					<td><?php echo "$direccion"; ?></td>
					<td><?php echo "$celular"; ?></td>
					<td><?php echo "$correo"; ?></td>
		   	</tr>
		    </table>
			<br><br>

		    <p>Usuario a modificar:</p>
		   	

		   <form action="modificar3.php" method="post">
		   		<input type="text" name="nombre1" value="<?php echo $nombre1; ?>" readonly>

		   		<p>¿Desea modificarlo? <br><input type="text" name="decision" placeholder="Escribe: si o no"></p>
		   		<input type="submit" value="Continuar">
		   </form>
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
