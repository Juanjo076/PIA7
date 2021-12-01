<?php
session_start();
$_SESSION['resultado']=$_POST["opcion"];
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
			<h2>Imagen No: 2</h2><br><br>
			<img  class="imagen" src="img/2.png" width="500px">
			<br><br>
			<p>¿Qué Número Obseva?</p>
			<form method="post" action="3.php">
				<select name="opcion">
					<option value="0">29</option>
					<option value="1">70</option>
				</select>
				<br><input type="submit" value="Siguiente" class="buttons">
			</form>
					<br><br>

</center>
	</section>
	<footer><p>https://www.testdaltonismo.com</p></footer>
</body>
</html>