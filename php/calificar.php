<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	 <link rel="shortcut icon" href="../img/icono.png">
	<link rel="stylesheet" type="text/css" href="../css/encuesta.css">
	<title>Inicio de Sesion</title>
</head>
<body>
	<section class="form-login">
		<center>
			<form method="post" action="validar.php">
				<p>Oftalmologo:</p>
				<select name="oftalmologo" class="controls" required>
	<?php
	include_once"conexion.php";
	$consulta= "SELECT * FROM oftalmologos";
	$resultado= $conexion ->query ($consulta);
	while($usuario=$resultado -> fetch()){;
	echo '
		<option value="'.$usuario["id"].'">'.$usuario["nombre"].'</option>';
}
	?>
	</select>
	<p>Calificación:</p>
	<select name="calificacion" class="controls" required>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<p>Número De Orden:</p>
	<input class="controls" type="text" name="orden" placeholder="Número De Orden" required>
	<input type="submit" name="enviar" class="buttons" value="Enviar">
	</form>
	<br><br><br>
	<a href="oftalmologos.php" ><button class="buttons">Regresar</button></a>
	</center>
	</section>
</body>