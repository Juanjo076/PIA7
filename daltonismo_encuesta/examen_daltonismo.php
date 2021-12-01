<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">

	 <link rel="shortcut icon" href="../img/icono.png">
	<link rel="stylesheet" type="text/css" href="../css/encuesta.css">
	<title>Examen</title>
</head>
<body>
	<section class="form-login">
		<center>
			<h2>Imagen No: 1</h2><br><br>
			<img  class="imagen" src="img/1.png" width="500px">
			<br><br>
			<p>¿Qué Número Obseva?</p>
			<form method="post" action="2.php">
				<select name="opcion">
					<option value="0">8</option>
					<option value="1">3</option>
				</select><br><br>
				<input type="submit" value="Siguiente" class="buttons">
			</form>
					<br>
</center>
	</section>
	<footer><p>Test Tomado de: https://admiravision.es/tests-medicion-agudeza-visual/</p></footer>
</body>
</html>