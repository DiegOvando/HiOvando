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
	$servidor = "localhost";
	$user = "root";
	$pass = "";
	$db = "agenda";

	$conexion = new mysqli($servidor,$user,$pass,$db);

	if ($conexion->connect_errno) {
		die("La conexión ha fallado" . $conexion->connect_errno);
	} else{
	?>	
		<h3>Conexión establecida <br><br></h3>
	<?php
	}
	?>	
	