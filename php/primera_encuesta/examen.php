<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../img/icono.png">
	<link rel="stylesheet" type="text/css" href="../../css/encuesta.css">
	<title>Examen</title>
</head>
<body>
	<section class="form-login">
		<center>
			<h2>Test</h2><br><br>
			<center>
			<img src="../../img/agudeza-visual-letras.jpg" width="500px">
		</center><br>
		<form method="post" action="resultado.php">
			<div class="contenedor">
			<p>Ingrese El Numero De Fila Hasta El Que Tenga Una Imagen Clara.</p>
	<select name="resultado_encuesta">
		<?php
		for ($i = 1; $i <= 10; $i++) {
			echo'<option value="'.$i.'">'.$i.'
		</option>';
		}
		?>
	</select>
</div>
<br>
	<input type="submit" name="teta" value="Continuar" class="buttons">
</form>
</center>
	</section>
</body>