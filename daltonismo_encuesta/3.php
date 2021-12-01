<?php
session_start();
$resultado_encuesta=$_POST["opcion"];
$resultado=$resultado_encuesta+$_SESSION['resultado'];
$_SESSION['resultado']=$resultado;
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
			<h2>Imagen No: 3</h2><br><br>
			<img  class="imagen" src="img/3.png" width="500px">
			<br><br>
			<p>¿Qué Número Obseva?</p>
			<form method="post" action="resultado.php">
				<select name="opcion">
					<option value="0">5</option>
					<option value="1">2</option>
				</select>
				<br><br><input type="submit" value="Siguiente" class="buttons">
			</form>
					<br>
</center>
	</section>
	<footer><p>https://www.testdaltonismo.com</p></footer>
</body>
</html>