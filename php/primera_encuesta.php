<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<title>Inicio de Sesion</title>
</head>
<body>
	<section class="form-login">
		<center><br><br><br>
			<?php
			echo'<h2>Bienvenido A Tu Primera Encuesta '.$_SESSION["nombre_usuario"].' :</h2><br>';
			?>
<br><br><br><br><br><br><a href="primera_encuesta/instrucciones.php" ><button class="buttons">Instrucciones</button></a>
</center>
	</section>
	<footer><p>Test Tomado de: https://admiravision.es/tests-medicion-agudeza-visual/</p></footer>
</body>